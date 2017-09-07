<?php

namespace App\Http\Controllers\Report;

use App\Report\ConferenceRegistration\ReportConferenceRegistrationRepository;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;

class ConferenceRegistrationReportController extends Controller
{
    public function index(Request $request){
        if (Auth::guard('User')->check()) {
            $type = 'all';

            $conference_regRepo = new ReportConferenceRegistrationRepository();
            $conference_registrations = $conference_regRepo->getConferenceRegistration();
            $from_date = null;
            $to_date = null;

            return view('report.conference_reg_view',compact('conference_registrations','from_date','to_date','type'));
        }
        return redirect('backend/login');
    }
    public function search($from_date =null,$to_date=null){
        if(Auth::guard('User')->check()){
            $conference_regRepo = new ReportConferenceRegistrationRepository();
            $conference_registrations = $conference_regRepo->getDataByDate($from_date,$to_date);
            return view('report.conference_reg_view',compact('conference_registrations','from_date','to_date'));
        }
        return redirect('backend/login');
    }
    public function excel($from_date=null,$to_date=null){
        if(Auth::guard('User')->check()) {
            ob_end_clean();     //discards the contents of the output buffer.
            ob_start();         //buffer start

            $conference_regRepo = new ReportConferenceRegistrationRepository();
            $conference_registrations = $conference_regRepo->getDataByDate($from_date,$to_date);

            $display_ary = array();
            foreach($conference_registrations as $conference_registration){
                if($conference_registration->status == 1){
                    $status = 'Pending';
                }elseif($conference_registration->status == 2){
                    $status = 'Confirm';
                }else{
                    $status = 'Cancel';
                }
                if($conference_registration->registration_category == 1){
                    $reg_cat = 'Option One';
                }else{
                    $reg_cat = 'Option Two';
                }
                $country = $conference_registration->country;

                $display_ary[$conference_registration->id]['First Name'] =  $conference_registration->first_name;
                $display_ary[$conference_registration->id]['Middle Name'] = $conference_registration->middle_name;
                $display_ary[$conference_registration->id]['Last Name'] = $last_name = $conference_registration->last_name;
                $display_ary[$conference_registration->id]['Organization'] = $conference_registration->organization;
                $display_ary[$conference_registration->id]['Email'] = $conference_registration->email;
                $display_ary[$conference_registration->id]['Country'] = $country;
                $display_ary[$conference_registration->id]['Phone'] = $conference_registration->ph_no;
                $display_ary[$conference_registration->id]['Registration Category'] = $reg_cat;
                $display_ary[$conference_registration->id]['Payment Type'] = $conference_registration->payment_type;
                $display_ary[$conference_registration->id]['Status'] = $status;
            }
            Excel::create('Conference_Registration_Export', function($excel)use($display_ary) {
                $excel->sheet('Conference Registration', function($sheet)use($display_ary) {

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
