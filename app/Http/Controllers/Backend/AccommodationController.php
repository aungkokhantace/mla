<?php

namespace App\Http\Controllers\Backend;

use App\Backend\Accommodation\Accommodation;
use App\Backend\Accommodation\AccommodationRepositoryInterface;
use App\Backend\Infrastructure\Forms\AccommodationEntryFormRequest;
use App\Core\FormatGenerator;
use App\Core\ReturnMessage;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;

class AccommodationController extends Controller
{
    private $repo;

    public function __construct(AccommodationRepositoryInterface $repo)
    {
        $this->repo = $repo;
    }
    public function index(Request $request)
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
    }

    public function create(){
        if (Auth::guard('User')->check()) {
            return view('backend.accommodation.create');
        }
        return redirect('/');
    }

    public function store(AccommodationEntryFormRequest $request)
    {

        $request->validate();

        $name = Input::get('name');
        $stars = Input::get('stars');
        $description = Input::get('description');


        if (Input::file()) {
            $image = Input::file('image');
            $path = base_path() . '/public/accommodationImages';
            if (!file_exists($path)) {
                mkdir($path, 0777, true);
            }
            $image_name = Input::file('image')->getClientOriginalName();
            $accommodation_image = '/accommodationImages/' . $image_name;
            $image->move($path, $image_name);


            $accommodationObj = new Accommodation();
            $accommodationObj->name = $name;
            $accommodationObj->stars = $stars;
            $accommodationObj->description = $description;
            $accommodationObj->image = $accommodation_image;

            $result = $this->repo->create($accommodationObj);


            if ($result['aceplusStatusCode'] == ReturnMessage::OK) {
                return redirect()->action('Backend\AccommodationController@index')
                    ->withMessage(FormatGenerator::message('Success', 'Accommodation created ...'));
            } else {
                return redirect()->action('Backend\AccommodationController@index')
                    ->withMessage(FormatGenerator::message('Fail', 'Accommodation did not create ...'));
            }
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
