<?php

namespace App\Http\Controllers\Backend;

use App\Backend\Country\Country;
use App\Core\Utility;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Backend\Infrastructure\Forms\CountryEntryRequest;
use App\Backend\Infrastructure\Forms\CountryEditRequest;
use App\Backend\Country\CountryRepositoryInterface;
use Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use App\Core\FormatGenerator As FormatGenerator;
use App\Core\ReturnMessage As ReturnMessage;

class CountryController extends Controller
{
    private $repo;

    public function __construct(CountryRepositoryInterface $repo)
    {
        $this->repo = $repo;
    }

    public function index(Request $request)
    {
        try{
            if (Auth::guard('User')->check()) {
                $countries      = $this->repo->getObjs();
                return view('backend.country.index')->with('countries',$countries);
            }
            return redirect('/');
        }
        catch(\Exception $e){
            return redirect('backend/error/204/country');
        }
    }

    public function create(){
        if (Auth::guard('User')->check()) {
            return view('backend.country.country');
        }
        return redirect('/');
    }

    public function store(CountryEntryRequest $request)
    {
        $request->validate();
        $name           = (Input::has('name')) ? Input::get('name') : "";

        $paramObj = new Country();
        $paramObj->name         = $name;

        $result = $this->repo->create($paramObj);

        if($result['aceplusStatusCode'] ==  ReturnMessage::OK){
            return redirect()->action('Backend\CountryController@index')
                ->withMessage(FormatGenerator::message('Success', 'Country created ...'));
        }
        else{
            return redirect()->action('Backend\CountryController@index')
                ->withMessage(FormatGenerator::message('Fail', 'Country did not create ...'));
        }
    }

    public function edit($id){
        if (Auth::guard('User')->check()) {
            $country = $this->repo->getObjByID($id);
            return view('backend.country.country')->with('country',$country);
        }
        return redirect('/');
    }

    public function update(CountryEditRequest $request){
        $request->validate();
        $id = Input::get('id');
        $name           = (Input::has('name')) ? Input::get('name') : "";

        $paramObj = Country::find($id);

        $paramObj->name         = $name;

        $result = $this->repo->update($paramObj);

        if($result['aceplusStatusCode'] ==  ReturnMessage::OK){
            return redirect()->action('Backend\CountryController@index')
                ->withMessage(FormatGenerator::message('Success', 'Country updated ...'));
        }
        else{
            return redirect()->action('Backend\CountryController@index')
                ->withMessage(FormatGenerator::message('Fail', 'Country did not update ...'));
        }
    }

    public function destroy(){

        $id         = Input::get('selected_checkboxes');
        $new_string = explode(',', $id);
        $delete_flag = true;
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
        if($delete_flag){
            return redirect()->action('Backend\CountryController@index')
                ->withMessage(FormatGenerator::message('Success', 'Country deleted ...'));
        }
        else{
            return redirect()->action('Backend\CountryController@index')
                ->withMessage(FormatGenerator::message('Fail', 'Country did not delete ...'));
        }
    }


}
