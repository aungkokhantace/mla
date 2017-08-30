<?php

namespace App\Http\Controllers\Backend;

use App\Backend\Infrastructure\Forms\PostConferenceEntryFormRequest;
use App\Backend\PostConferenceTravel\PostConferenceTravel;
use App\Backend\PostConferenceTravel\PostConferenceTravelRepositoryInterface;
use App\Core\FormatGenerator;
use App\Core\ReturnMessage;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;

class PostConferenceTravelController extends Controller
{
    private $repo;

    public function __construct(PostConferenceTravelRepositoryInterface $repo)
    {
        $this->repo = $repo;
    }

    public function index(Request $request)
    {
        try{
            if (Auth::guard('User')->check()) {
                $post_conference_travels      = $this->repo->getPostConferenceTravel();
                return view('backend.post_conference_travel.index')->with('post_conference_travels', $post_conference_travels);
            }
            return redirect('/');
        }
        catch(\Exception $e){
            return redirect('/error/204/post');
        }
    }

    public function create(){
        if (Auth::guard('User')->check()) {
            return view('backend.post_conference_travel.create');
        }
        return redirect('/');
    }

    public function store(PostConferenceEntryFormRequest $request){

        $request->validate();

        $name = Input::get('name');

        if(Input::file()){
            $image = Input::file('image');
            $path = base_path().'/public/PostConferenceTravelImages';

            if(! file_exists($path)){
                mkdir($path,0777,true);
            }
            $image_name = Input::file('image')->getClientOriginalName();
            $post_conference_travel_image = '/PostConferenceTravelImages/'.$image_name;
            $image->move($path,$image_name);

            // $image = Image::make(sprintf($path .'/%s', $image_name))->resize(178,136)->save();

            $postconferencetravelObj = new PostConferenceTravel();
            $postconferencetravelObj->name = $name;
            $postconferencetravelObj->image = $post_conference_travel_image;

            $result = $this->repo->create($postconferencetravelObj);


            if($result['aceplusStatusCode'] ==  ReturnMessage::OK){
                return redirect()->action('Backend\PostConferenceTravelController@index')
                    ->withMessage(FormatGenerator::message('Success', 'Post created ...'));
            }
            else{
                return redirect()->action('Backend\PostConferenceTravelController@index')
                    ->withMessage(FormatGenerator::message('Fail', 'Post did not create ...'));
            }
        }

    }

    public function edit($id){
        if (Auth::guard('User')->check()) {
            $post_conference_travel = $this->repo->getObjByID($id);
            return view('backend.post_conference_travel.create')->with('post_conference_travel',$post_conference_travel);
        }
        return redirect('/');
    }

    public function update(PostConferenceEntryFormRequest $request){
        $request->validate();
        $id = Input::get('id');

        $name = Input::get('name');

        if(Input::file()) {
            $image = Input::file('image');
            $path = base_path().'/public/PostConferenceTravelImages';

            if(! file_exists($path)){
                mkdir($path,0777,true);
            }
            $image_name = Input::file('image')->getClientOriginalName();
            $post_conference_travel_image = '/PostConferenceTravelImages/'.$image_name;
            $image->move($path,$image_name);

            // $image = Image::make(sprintf($path .'/%s', $image_name))->resize(178,136)->save();

            $postconferencetravelObj = PostConferenceTravel::find($id);
            $postconferencetravelObj->name = $name;
            $postconferencetravelObj->image = $post_conference_travel_image;

            $result = $this->repo->update($postconferencetravelObj);
            if($result['aceplusStatusCode'] ==  ReturnMessage::OK){
                return redirect()->action('Backend\PostConferenceTravelController@index')
                    ->withMessage(FormatGenerator::message('Success', 'Post updated ...'));
            }
            else{
                return redirect()->action('Backend\PostConferenceTravelController@index')
                    ->withMessage(FormatGenerator::message('Fail', 'Post did not update ...'));
            }
        }

    }
    public function destroy(){
        $id         = Input::get('selected_checkboxes');
        $new_string = explode(',', $id);
        foreach($new_string as $id){
            $this->repo->delete($id);
        }

        return redirect()->action('Backend\PostConferenceTravelController@index')
            ->withMessage(FormatGenerator::message('Success', 'Post deleted ...'));

    }
}
