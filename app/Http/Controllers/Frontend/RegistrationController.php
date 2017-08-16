<?php

namespace App\Http\Controllers\Frontend;

use App\Core\FormatGenerator;
use App\Core\ReturnMessage;
use App\Frontend\ConferenceRegistration\ConferenceRegistration;
use App\Frontend\ConferenceRegistration\ConferenceRegistrationRepositoryInterface;
use App\Frontend\Infrastructure\Forms\RegistrationEntryFormRequest;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

class RegistrationController extends Controller
{
    private $repo;

    public function __construct(ConferenceRegistrationRepositoryInterface $repo)
    {
        $this->repo = $repo;
    }
    /*public function index(Request $request)
    {
        try{
            if (Auth::guard('User')->check()) {
                $accommodations      = $this->repo->getAccommodation();
                return view('backend.accommodation.index')->with('accommodations', $accommodations);
            }
            return redirect('/');
        }
        catch(\Exception $e){
            return redirect('/error/204/post');
        }
    }*/

    public function index(){
            $countries = $this->repo->getCountry();
            return view('frontend.registration.registration',compact('countries'));
    }

    public function store(RegistrationEntryFormRequest $request)
    {

        $request->validate();

        $fname = Input::get('first_name');
        $mname = Input::get('middle_name');
        $lname = Input::get('last_name');
        $organization = Input::get('organization');
        $email = Input::get('email');
        $country = Input::get('country');
        $ph_no = Input::get('ph_no');
        $reg_cat = Input::get('registration_category');
        $payment_type = Input::get('payment_type');



        $registrationObj = new ConferenceRegistration();
        $registrationObj->first_name = $fname;
        $registrationObj->middle_name = $mname;
        $registrationObj->last_name = $lname;
        $registrationObj->organization = $organization;
        $registrationObj->email = $email;
        $registrationObj->country = $country;
        $registrationObj->ph_no = $ph_no;
        $registrationObj->registration_category = $reg_cat;
        $registrationObj->payment_type = $payment_type;


            $result = $this->repo->create($registrationObj);


            if ($result['aceplusStatusCode'] == ReturnMessage::OK) {
                return redirect()->action('Frontend\RegistrationController@index')
                    ->withMessage(FormatGenerator::message('Success', 'Registration successfully created ...'));
            } else {
                return redirect()->action('Frontend\RegistrationController@index')
                    ->withMessage(FormatGenerator::message('Fail', 'Registration did not successful ...'));
            }
    }

    public function edit($id){
        if (Auth::guard('User')->check()) {
            $accommodation = $this->repo->getObjByID($id);
            return view('backend.accommodation.create')->with('accommodation',$accommodation);
        }
        return redirect('/');
    }

    public function update(AccommodationEntryFormRequest $request){
        $request->validate();
        $id = Input::get('id');

        $name = Input::get('name');
        $stars = Input::get('stars');
        $description = Input::get('description');

        if(Input::file()){
            $image = Input::file('image');
            $path = base_path() . '/public/accommodationImages';
            if (!file_exists($path)) {
                mkdir($path, 0777, true);
            }
            $image_name = Input::file('image')->getClientOriginalName();
            $accommodation_image = '/accommodationImages/' . $image_name;
            $image->move($path, $image_name);

            $image = Image::make(sprintf($path .'/%s', $image_name))->resize(178,136)->save();

            $accommodationObj = Accommodation::find($id);
            $accommodationObj->name = $name;
            $accommodationObj->stars = $stars;
            $accommodationObj->description = $description;
            $accommodationObj->image = $accommodation_image;

            $result = $this->repo->update($accommodationObj);


            if($result['aceplusStatusCode'] ==  ReturnMessage::OK){
                return redirect()->action('Backend\AccommodationController@index')
                    ->withMessage(FormatGenerator::message('Success', 'Accommodation updated ...'));
            }
            else{
                return redirect()->action('Backend\AccommodationController@index')
                    ->withMessage(FormatGenerator::message('Fail', 'Accommodation did not update ...'));
            }
        }

    }
    public function destroy(){
        $id         = Input::get('selected_checkboxes');
        $new_string = explode(',', $id);
        foreach($new_string as $id){
            $this->repo->delete($id);
        }

        return redirect()->action('Backend\AccommodationController@index')
            ->withMessage(FormatGenerator::message('Success', 'Accommodation deleted ...'));

    }
}
