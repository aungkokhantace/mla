<?php

namespace App\Http\Controllers\Report;

use App\Report\Program\ReportProgramCallRepository;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;

class ProgramCallReportController extends Controller
{
    public function index(Request $request){
        if (Auth::guard('User')->check()) {
            $programCallRepo = new ReportProgramCallRepository();
            $program_calls = $programCallRepo->getProgramCall();
            $from_date = null;
            $to_date = null;

            return view('report.program_call_view',compact('program_calls','from_date','to_date'));
        }
        return redirect('backend/login');
    }
    public function search($from_date =null,$to_date=null){
        if(Auth::guard('User')->check()){
            $programCallRepo = new ReportProgramCallRepository();
            $program_calls = $programCallRepo->getDataByDate($from_date,$to_date);
            return view('report.program_call_view',compact('program_calls','from_date','to_date'));
        }
        return redirect('backend/login');
    }
    public function excel($from_date=null,$to_date=null){
        if(Auth::guard('User')->check()) {
            ob_end_clean();     //discards the contents of the output buffer.
            ob_start();         //buffer start

            $programCallRepo = new ReportProgramCallRepository();
            $program_calls = $programCallRepo->getDataByDate($from_date,$to_date);

            $display_ary = array();
            foreach($program_calls as $program_call){
                if($program_call->status == 1){
                    $status = 'Pending';
                }elseif($program_call->status == 2){
                    $status = 'Confirm';
                }else{
                    $status = 'Cancel';
                }

                $display_ary[$program_call->id]['First Author'] =  $program_call->first_author;
                $display_ary[$program_call->id]['Email'] = $program_call->email;
                $display_ary[$program_call->id]['Address'] = $program_call->address;
                $display_ary[$program_call->id]['Second Author'] = $program_call->second_author;
                $display_ary[$program_call->id]['Third Author'] = $program_call->third_author;
                $display_ary[$program_call->id]['Abstract'] = $program_call->abstract;
                $display_ary[$program_call->id]['Status'] = $status;
            }
            Excel::create('Program_Call_Export', function($excel)use($display_ary) {
                $excel->sheet('Program Call', function($sheet)use($display_ary) {

                    /*$count = count($display_ary);*/

                    $sheet->fromArray($display_ary);

                    $sheet->setFontFamily('Times New Roman'); //change default(Calibri) font family

                    /* $sheet->appendRow(['Total',$count]);*/

                    $sheet->row(1,function($row){   //style for first row
                        $row->setBackground('#1976d3');
                        $row->setFont(['size' => 13,'bold' =>true]);
                    });

                    /*$sheet->row($count+2,function($row){ //style for last row
                        $row->setBackground('#199fff');
                        $row->setFont(['size' => 13,'bold'=>true]);
                    });*/
                });
            })->download('xls');

            ob_flush();
            return Redirect();

        }
    }
}
