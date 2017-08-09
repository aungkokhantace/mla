<?php

namespace App\Http\Controllers\Backend;

use App\Backend\City\City;
use App\Backend\Country\CountryRepository;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Backend\Infrastructure\Forms\CityEntryRequest;
use App\Backend\Infrastructure\Forms\CityEditRequest;
use App\Backend\City\CityRepositoryInterface;
use App\Backend\Country\Country;
use Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use App\Core\FormatGenerator As FormatGenerator;
use App\Core\ReturnMessage As ReturnMessage;
class CityController extends Controller
{
    private $repo;

    public function __construct(CityRepositoryInterface $repo)
    {
        $this->repo = $repo;
    }

    public function index(Request $request)
    {
        try{
            if (Auth::guard('User')->check()) {
                $cities      = $this->repo->getObjs();
                return view('backend.city.index')->with('cities',$cities);
            }
            return redirect('/');
        }
        catch(\Exception $e){
            return redirect('backend/error/204/city');
        }

    }

    public function create()
    {
        if(Auth::guard('User')->check()){
            $countryRepo = new CountryRepository();
            $countries = $countryRepo->getObjs();
            return view('backend.city.city')->with('countries',$countries);
        }
        return redirect('/');
    }

    public function store(CityEntryRequest $request)
    {
        $request->validate();
        $city_name       = Input::get('name');
        $country_id      = Input::get('country_id');

        $paramObj = new City();
        $paramObj->name     = $city_name;
        $paramObj->country_id    = $country_id;

        $result = $this->repo->create($paramObj);
        if($result['aceplusStatusCode'] ==  ReturnMessage::OK){

            return redirect()->action('Backend\CityController@index')
                ->withMessage(FormatGenerator::message('Success', 'City created ...'));
        }
        else{
            return redirect()->action('Backend\CityController@index')
                ->withMessage(FormatGenerator::message('Fail', 'City did not created ...'));
        }

    }

    public function edit($id)
    {
        if (Auth::guard('User')->check()) {
            $city        = City::find($id);

            $countryRepo = new CountryRepository();
            $countries   = $countryRepo->getObjs();

            return view('backend.city.city')->with('city', $city)->with('countries', $countries);
        }
        return redirect('/backend/login');
    }

    public function update(CityEditRequest $request){

        $request->validate();
        $id                         = Input::get('id');
        $city_name                  = Input::get('name');
        $country_id                 = Input::get('country_id');
        $paramObj                   = City::find($id);
        $paramObj->name        = $city_name;
        $paramObj->country_id       = $country_id;

        $result = $this->repo->update($paramObj);
        if($result['aceplusStatusCode'] ==  ReturnMessage::OK){

            return redirect()->action('Backend\CityController@index')
                ->withMessage(FormatGenerator::message('Success', 'City updated ...'));
        }
        else{

            return redirect()->action('Backend\CityController@index')
                ->withMessage(FormatGenerator::message('Fail', 'City did not update ...'));
        }
    }

    public function destroy(){
        $id         = Input::get('selected_checkboxes');
        $new_string = explode(',', $id);
        foreach($new_string as $id){
            $check = $this->repo->checkToDelete($id);
            if(isset($check) && count($check)>0){
                alert()->warning('There are cities under this country_id = '.$id)->persistent('OK');
                $delete_flag = false;
            }
            else{
                $this->repo->delete($id);
            }
        }
        return redirect()->action('Backend\CityController@index'); //to redirect listing page
    }

}
