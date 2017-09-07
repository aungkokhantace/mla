<?php

namespace App\Http\Controllers\Report;

use App\Report\Exhibitor\ReportExhibitorRepository;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;

class ExhibitorReportController extends Controller
{
    public function index(Request $request){
        if (Auth::guard('User')->check()) {
            $exhibitorRepo = new ReportExhibitorRepository();
            $exhibitors = $exhibitorRepo->getExhibitor();
            $type = 'all';
            $from_date = null;
            $to_date = null;

            return view('report.exhibitor_view',compact('exhibitors','from_date','to_date','type'));
        }
        return redirect('backend/login');
    }
    public function search($type= null,$from_date =null,$to_date=null){
        if(Auth::guard('User')->check()){
            $exhibitorRepo = new ReportExhibitorRepository();
            $exhibitors = $exhibitorRepo->getDataByDate($type,$from_date,$to_date);
            return view('report.exhibitor_view',compact('exhibitors','from_date','to_date','type'));
        }
        return redirect('backend/login');
    }
    public function excel($type= null,$from_date=null,$to_date=null){
        if(Auth::guard('User')->check()) {
            ob_end_clean();     //discards the contents of the output buffer.
            ob_start();         //buffer start

            $exhibitorRepo = new ReportExhibitorRepository();
            $exhibitors = $exhibitorRepo->getDataByDate($type,$from_date,$to_date);

            $display_ary = array();
            foreach($exhibitors as $exhibitor){
                if($exhibitor->status == 1){
                    $status = 'Pending';
                }elseif($exhibitor->status == 2){
                    $status = 'Confirm';
                }else{
                    $status = 'Cancel';
                }
                if($exhibitor->business_type == 1){
                    $business_type = 'Option One';
                }else{
                    $business_type = 'Option Two';
                }

                $display_ary[$exhibitor->id]['Name'] =  $exhibitor->name;
                $display_ary[$exhibitor->id]['Address'] = $exhibitor->address;
                $display_ary[$exhibitor->id]['Phone'] = $exhibitor->ph_no;
                $display_ary[$exhibitor->id]['Email'] = $exhibitor->email;
                $display_ary[$exhibitor->id]['Business Type'] = $business_type;
                $display_ary[$exhibitor->id]['Status'] = $status;
            }
            Excel::create('Exhibitor_and_Sponsor_Export', function($excel)use($display_ary) {
                $excel->sheet('Exhibitor & Sponsor', function($sheet)use($display_ary) {

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
