<?php

namespace App\Http\Controllers\Sample;

use App\Core\ReturnMessage;
use App\Sample\Test\TestRepository;
use App\Sample\Test\TestRepositoryInterface;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Sample\Test\Test;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Maatwebsite\Excel\Facades\Excel;

class ExcelExportController extends Controller
{
    private $testRepository;
    public $tbTest = "";

    public function __construct(TestRepositoryInterface $testRepository)
    {
        $this->testRepository = $testRepository;
        $this->tbTest = (new Test())->getTable();
    }
    public function index(){
        return view('sample.excelExportSample');
    }
    public function excelExport(){
        ob_end_clean();     //discards the contents of the output buffer.
        ob_start();         //buffer start
        $tests  = $this->testRepository->getAllTest();
        Excel::create('Test_Excel_Export', function($excel)use($tests) {
            $excel->sheet('Test', function($sheet)use($tests) {

                $count = count($tests);

                $sheet->fromArray($tests);

                $sheet->setFontFamily('Times New Roman'); //change default(Calibri) font family

                $sheet->appendRow(['Total',$count]);

                $sheet->row(1,function($row){   //style for first row
                    $row->setBackground('#1976d3');
                    $row->setFont(['size' => 13,'bold' =>true]);
                });

                $sheet->row($count+2,function($row){ //style for last row
                    $row->setBackground('#199fff');
                    $row->setFont(['size' => 13,'bold'=>true]);
                });
            });
        })->download('xls');

        /*
        send the contents of the output buffer
        the buffer contents are discarded after ob_flush() is called.
        */
        ob_flush();
        return Redirect();
    }

    public function import(){
        return view('sample.excelImport');
    }

    public function excelImport()
    {
        try {
            DB::beginTransaction();
            if (Input::hasFile('import_file')) {
                $table_name = Input::get('table_name');
                $path = Input::file('import_file')->getRealPath();
                $data = Excel::load($path, function ($reader) {
                })->get();

                if (!empty($data) && $data->count()) {

                    if ($table_name == "tests") {
                        $testRepo = new TestRepository();
                        $result = $testRepo->insertTests($data);

                        if ($result != ReturnMessage::OK) {
                            DB::rollback();
                            alert()->error('Error Message', 'Sorry! There is some problem.')->persistent('Close');
                        }
                    }
                }
                DB::commit();
                alert()->success('Success Message', 'Table has imported successfully')->persistent('Close');
            }
            return back();
        }
        catch(\Exception $e){
            DB::rollback();
            alert()->error('Error Message', 'Sorry! There is some problem.')->persistent('Close');
        }
    }
}
