<?php

namespace App\Http\Controllers\Frontend;

use App\Core\FormatGenerator;
use App\Core\ReturnMessage;
use App\Frontend\Exhibition\ExhibitionExhibitor;
use App\Frontend\Exhibition\ExhibitorRepositoryInterface;
use App\Frontend\Infrastructure\Forms\ExhibitorEntryFormRequest;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

class ExhibitionController extends Controller
{
    private $exhibitorRepository;

    public function __construct(ExhibitorRepositoryInterface $exhibitorRepository)
    {
        $this->exhibitorRepository = $exhibitorRepository;
    }

    public function exhibition_exhibitor(){
        return view('frontend.exhibition.exhibition_exhibitor');
    }
    public function exhibition_exhibitor_store(ExhibitorEntryFormRequest $request){
        $request->validate();

        $name = Input::get('name');
        $address = Input::get('address');
        $ph_no = Input::get('ph_no');
        $email = Input::get('email');
        $business_type = Input::get('business_type');


        $exhibitorObj = new ExhibitionExhibitor();
        $exhibitorObj->name = $name;
        $exhibitorObj->address = $address;
        $exhibitorObj->ph_no = $ph_no;
        $exhibitorObj->email = $email;
        $exhibitorObj->business_type = $business_type;


        $result = $this->exhibitorRepository->create($exhibitorObj);


        if ($result['aceplusStatusCode'] == ReturnMessage::OK) {
            return redirect()->action('Frontend\ExhibitionController@exhibition_exhibitor')
                ->withMessage(FormatGenerator::message('Success', 'Exhibitor or Sponsor successfully created ...'));
        } else {
            return redirect()->action('Frontend\ExhibitionController@exhibition_exhibitor')
                ->withMessage(FormatGenerator::message('Fail', 'Exhibitor or Sponsor did not create ...'));
        }
    }
}
