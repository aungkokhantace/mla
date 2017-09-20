<?php

namespace App\Http\Controllers\Backend;

use App\Backend\Infrastructure\Forms\LatestNewEntryRequest;
use App\Backend\Infrastructure\Forms\LatestNewEditRequest;
use App\Backend\LatestNew\LatestNew;
use App\Backend\LatestNew\LatestNewRepositoryInterface;
use App\Core\FormatGenerator;
use App\Core\ReturnMessage;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;

class LatestNewController extends Controller
{
    private $repo;

    public function __construct(LatestNewRepositoryInterface $repo)
    {
        $this->repo = $repo;
    }
    public function index(Request $request)
    {
        try{
            if (Auth::guard('User')->check()) {
                $latest_news      = $this->repo->getLatestNew();
                foreach($latest_news as $news){
                    $description = $news->description;
                    $short_description = substr($description,0,400).'...';
                    $news->short_description = $short_description;
                }
                return view('backend.latest_new.index')->with('latest_news', $latest_news);
            }
            return redirect('/');
        }
        catch(\Exception $e){
            return redirect('/error/204/post');
        }
    }

    public function create(){
        if (Auth::guard('User')->check()) {
            return view('backend.latest_new.create');
        }
        return redirect('/');
    }

    public function store(LatestNewEntryRequest $request){

        $request->validate();

        $name = Input::get('name');
        $description = Input::get('description');

            $image = Input::file('image');
            $path = base_path().'/public/latestnewImages';

        if(Input::file()) {
            if (!file_exists($path)) {
                mkdir($path, 0777, true);
            }
            $image_name = Input::file('image')->getClientOriginalName();
            $latest_new_image = '/latestnewImages/' . $image_name;
            $image->move($path, $image_name);

            $latestnewObj = new LatestNew();
            $latestnewObj->name = $name;
            $latestnewObj->description = $description;
            $latestnewObj->image = $latest_new_image;

            $result = $this->repo->create($latestnewObj);


            if ($result['aceplusStatusCode'] == ReturnMessage::OK) {
                return redirect()->action('Backend\LatestNewController@index')
                    ->withMessage(FormatGenerator::message('Success', 'Latest New created ...'));
            } else {
                return redirect()->action('Backend\LatestNewController@index')
                    ->withMessage(FormatGenerator::message('Fail', 'Latest New did not create ...'));
            }
        }else{
            $latestnewObj = new LatestNew();
            $latestnewObj->name = $name;
            $latestnewObj->description = $description;
            $latestnewObj->image = null;

            $result = $this->repo->create($latestnewObj);


            if ($result['aceplusStatusCode'] == ReturnMessage::OK) {
                return redirect()->action('Backend\LatestNewController@index')
                    ->withMessage(FormatGenerator::message('Success', 'Latest New created ...'));
            } else {
                return redirect()->action('Backend\LatestNewController@index')
                    ->withMessage(FormatGenerator::message('Fail', 'Latest New did not create ...'));
            }
        }
    }

    public function edit($id){
        if (Auth::guard('User')->check()) {
            $latest_new = $this->repo->getObjByID($id);
            return view('backend.latest_new.create')->with('latest_new',$latest_new);
        }
        return redirect('/');
    }

    public function update(LatestNewEditRequest $request){
        $request->validate();
        $id = Input::get('id');
        $name = Input::get('name');
        $description = Input::get('description');

        $removeImageFlag          = (Input::has('removeImageFlag')) ? Input::get('removeImageFlag') : 0;

        if(Input::file()){
            $image = Input::file('image');
            $path = base_path().'/public/latestnewImages';

            if(! file_exists($path)){
                mkdir($path,0777,true);
            }
            $image_name = Input::file('image')->getClientOriginalName();
            $latest_new_image = '/latestnewImages/'.$image_name;
            $image->move($path,$image_name);

            $latestnewObj = LatestNew::find($id);
            $latestnewObj->name = $name;
            $latestnewObj->description = $description;
            $latestnewObj->image = $latest_new_image;

            $result = $this->repo->update($latestnewObj);


            if($result['aceplusStatusCode'] ==  ReturnMessage::OK){
                return redirect()->action('Backend\LatestNewController@index')
                    ->withMessage(FormatGenerator::message('Success', 'Latest New updated ...'));
            }
            else{
                return redirect()->action('Backend\LatestNewController@index')
                    ->withMessage(FormatGenerator::message('Fail', 'Latest New did not update ...'));
            }
        }
        else{
            $latestnewObj = LatestNew::find($id);
            $latestnewObj->name = $name;
            $latestnewObj->description = $description;

            if($removeImageFlag == 1){
                $latestnewObj->image             = "";
            }

            $result = $this->repo->create($latestnewObj);


            if ($result['aceplusStatusCode'] == ReturnMessage::OK) {
                return redirect()->action('Backend\LatestNewController@index')
                    ->withMessage(FormatGenerator::message('Success', 'Latest New updated ...'));
            } 
            else {
                return redirect()->action('Backend\LatestNewController@index')
                    ->withMessage(FormatGenerator::message('Fail', 'Latest New did not update ...'));
            }
        }

    }
    public function destroy(){
        $id         = Input::get('selected_checkboxes');
        $new_string = explode(',', $id);
        foreach($new_string as $id){
            $this->repo->delete($id);
        }

        return redirect()->action('Backend\LatestNewController@index')
            ->withMessage(FormatGenerator::message('Success', 'Latest New deleted ...'));

    }
}
