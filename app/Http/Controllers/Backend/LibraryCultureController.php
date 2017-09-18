<?php

namespace App\Http\Controllers\Backend;

use App\Backend\Infrastructure\Forms\LibraryCultureEntryFormRequest;
use App\Backend\Infrastructure\Forms\LibraryCultureEditFormRequest;
use App\Backend\LibraryCulture\LibraryCulture;
use App\Backend\LibraryCulture\LibraryCultureRepositoryInterface;
use App\Core\FormatGenerator;
use App\Core\ReturnMessage;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;

class LibraryCultureController extends Controller
{
    private $repo;

    public function __construct(LibraryCultureRepositoryInterface $repo)
    {
        $this->repo = $repo;
    }

    public function index(Request $request)
    {
        try{
            if (Auth::guard('User')->check()) {
                $library_cultures      = $this->repo->getLibraryCulture();
                return view('backend.library_culture.index')->with('library_cultures', $library_cultures);
            }
            return redirect('/');
        }
        catch(\Exception $e){
            return redirect('/error/204/post');
        }
    }

    public function create(){
        if (Auth::guard('User')->check()) {
            return view('backend.library_culture.create');
        }
        return redirect('/');
    }

    public function store(LibraryCultureEntryFormRequest $request){

        $request->validate();

        $name = Input::get('name');
        $description = Input::get('description');

        if(Input::file()){
            $image = Input::file('image');
            $path = base_path().'/public/LibraryCultureImages';

            if(! file_exists($path)){
                mkdir($path,0777,true);
            }
            $image_name = Input::file('image')->getClientOriginalName();
            $library_culture_image = '/LibraryCultureImages/'.$image_name;
            $image->move($path,$image_name);

            $image = Image::make(sprintf($path .'/%s', $image_name))->resize(178,136)->save();

            $librarycultureObj = new LibraryCulture();
            $librarycultureObj->name = $name;
            $librarycultureObj->description = $description;
            $librarycultureObj->image = $library_culture_image;

            $result = $this->repo->create($librarycultureObj);


            if($result['aceplusStatusCode'] ==  ReturnMessage::OK){
                return redirect()->action('Backend\LibraryCultureController@index')
                    ->withMessage(FormatGenerator::message('Success', 'Library Culture created ...'));
            }
            else{
                return redirect()->action('Backend\LibraryCultureController@index')
                    ->withMessage(FormatGenerator::message('Fail', 'Library Culture did not create ...'));
            }
        }

    }

    public function edit($id){
        if (Auth::guard('User')->check()) {
            $library_culture = $this->repo->getObjByID($id);
            return view('backend.library_culture.create')->with('library_culture',$library_culture);
        }
        return redirect('/');
    }

    public function update(LibraryCultureEditFormRequest $request){
        $request->validate();
        $id = Input::get('id');

        $name = Input::get('name');
        $description = Input::get('description');

        if(Input::file()) {
            $image = Input::file('image');
            $path = base_path().'/public/LibraryCultureImages';

            if(! file_exists($path)){
                mkdir($path,0777,true);
            }
            $image_name = Input::file('image')->getClientOriginalName();
            $library_culture_image = '/LibraryCultureImages/'.$image_name;
            $image->move($path,$image_name);

            $image = Image::make(sprintf($path .'/%s', $image_name))->resize(178,136)->save();

            $librarycultureObj = LibraryCulture::find($id);
            $librarycultureObj->name = $name;
            $librarycultureObj->description = $description;
            $librarycultureObj->image = $library_culture_image;
           
            $result = $this->repo->update($librarycultureObj);
            if($result['aceplusStatusCode'] ==  ReturnMessage::OK){
                return redirect()->action('Backend\LibraryCultureController@index')
                    ->withMessage(FormatGenerator::message('Success', 'Library Culture updated ...'));
            }
            else{
                return redirect()->action('Backend\LibraryCultureController@index')
                    ->withMessage(FormatGenerator::message('Fail', 'Library Culture did not update ...'));
            }
        }
        else{
            $librarycultureObj = LibraryCulture::find($id);
            $librarycultureObj->name = $name;
            $librarycultureObj->description = $description;
           
            $result = $this->repo->update($librarycultureObj);
            if($result['aceplusStatusCode'] ==  ReturnMessage::OK){
                return redirect()->action('Backend\LibraryCultureController@index')
                    ->withMessage(FormatGenerator::message('Success', 'Library Culture updated ...'));
            }
            else{
                return redirect()->action('Backend\LibraryCultureController@index')
                    ->withMessage(FormatGenerator::message('Fail', 'Library Culture did not update ...'));
            }
        }

    }
    public function destroy(){
        $id         = Input::get('selected_checkboxes');
        $new_string = explode(',', $id);
        foreach($new_string as $id){
            $this->repo->delete($id);
        }

        return redirect()->action('Backend\LibraryCultureController@index')
            ->withMessage(FormatGenerator::message('Success', 'Library Culture deleted ...'));

    }
}
