<?php

namespace App\Http\Controllers\Report;

use App\Report\Program\ReportProgramPosterRepository;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;

class ProgramPosterReportController extends Controller
{
    public function index(Request $request){
        if (Auth::guard('User')->check()) {
            $programPosterRepo = new ReportProgramPosterRepository();
            $program_posters = $programPosterRepo->getProgramPoster();
            $type ="all";
            $from_date = null;
            $to_date = null;

            return view('report.program_poster_view',compact('program_posters','from_date','to_date','type'));
        }
        return redirect('backend/login');
    }
    public function search($type=null,$from_date =null,$to_date=null){
        if(Auth::guard('User')->check()){
            $programPosterRepo = new ReportProgramPosterRepository();
            $program_posters = $programPosterRepo->getDataByDate($type,$from_date,$to_date);
            return view('report.program_poster_view',compact('program_posters','from_date','to_date','type'));
        }
        return redirect('backend/login');
    }
    public function excel($type=null,$from_date=null,$to_date=null){
        if(Auth::guard('User')->check()) {
            ob_end_clean();     //discards the contents of the output buffer.
            ob_start();         //buffer start

            $programPosterRepo = new ReportProgramPosterRepository();
            $program_posters = $programPosterRepo->getDataByDate($type,$from_date,$to_date);

            $display_ary = array();
            foreach($program_posters as $program_poster){
                if($program_poster->status == 1){
                    $status = 'Pending';
                }elseif($program_poster->status == 2){
                    $status = 'Confirm';
                }else{
                    $status = 'Cancel';
                }

                $display_ary[$program_poster->id]['Title'] =  $program_poster->title;
                $display_ary[$program_poster->id]['Author'] = $program_poster->author;
                $display_ary[$program_poster->id]['Email'] = $program_poster->email;
                $display_ary[$program_poster->id]['Address'] = $program_poster->address;
                $display_ary[$program_poster->id]['Description'] = $program_poster->description;
                $display_ary[$program_poster->id]['Status'] = $status;
            }
            Excel::create('Program_Poster_Export', function($excel)use($display_ary) {
                $excel->sheet('Program Poster', function($sheet)use($display_ary) {

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
