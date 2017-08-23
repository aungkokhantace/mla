<?php

namespace App\Http\Controllers\Backend;


use App\Backend\Infrastructure\Forms\SponsorEntryFormRequest;
use App\Backend\Sponsor\Sponsor;
use App\Backend\Sponsor\SponsorRepositoryInterface;
use App\Core\FormatGenerator;
use App\Core\ReturnMessage;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;

class SponsorController extends Controller
{
    private $repo;

    public function __construct(SponsorRepositoryInterface $repo)
    {
        $this->repo = $repo;
    }

    public function index(Request $request)
    {
        try{
            if (Auth::guard('User')->check()) {
                $sponsors      = $this->repo->getSponsor();
                return view('backend.sponsor.index')->with('sponsors', $sponsors);
            }
            return redirect('/');
        }
        catch(\Exception $e){
            return redirect('/error/204/post');
        }
    }

    public function create(){
        if (Auth::guard('User')->check()) {
            $package_types = $this->repo->getPackageType();
            return view('backend.sponsor.create',compact('package_types'));
        }
        return redirect('/');
    }

    public function store(SponsorEntryFormRequest $request){

        $request->validate();

        $name = Input::get('name');
        $package_type = Input::get('package_type');

        if(Input::file()){
            $image = Input::file('image');
            $path = base_path().'/public/SponsorImages';

            if(! file_exists($path)){
                mkdir($path,0777,true);
            }
            $image_name = Input::file('image')->getClientOriginalName();
            $sponsor_image = '/SponsorImages/'.$image_name;
            $image->move($path,$image_name);

            $image = Image::make(sprintf($path .'/%s', $image_name))->resize(178,136)->save();

            $sponsorObj = new Sponsor();
            $sponsorObj->name = $name;
            $sponsorObj->package_type = $package_type;
            $sponsorObj->image = $sponsor_image;

            $result = $this->repo->create($sponsorObj);


            if($result['aceplusStatusCode'] ==  ReturnMessage::OK){
                return redirect()->action('Backend\SponsorController@index')
                    ->withMessage(FormatGenerator::message('Success', 'Sponsor image created ...'));
            }
            else{
                return redirect()->action('Backend\SponsorController@index')
                    ->withMessage(FormatGenerator::message('Fail', 'Sponsor image did not create ...'));
            }
        }

    }

    public function edit($id){
        if (Auth::guard('User')->check()) {
            $sponsor = $this->repo->getObjByID($id);
            $package_types = $this->repo->getPackageType();
            return view('backend.sponsor.create',compact('sponsor','package_types'));
        }
        return redirect('/');
    }

    public function update(SponsorEntryFormRequest $request){
        $request->validate();
        $id = Input::get('id');
        $name = Input::get('name');
        $package_type = Input::get('package_type');

        if(Input::file()) {
            $image = Input::file('image');
            $path = base_path().'/public/SponsorImages';

            if(! file_exists($path)){
                mkdir($path,0777,true);
            }
            $image_name = Input::file('image')->getClientOriginalName();
            $sponsor_image = '/SponsorImages/'.$image_name;
            $image->move($path,$image_name);

            $image = Image::make(sprintf($path .'/%s', $image_name))->resize(178,136)->save();

            $sponsorObj = Sponsor::find($id);
            $sponsorObj->name = $name;
            $sponsorObj->package_type = $package_type;
            $sponsorObj->image = $sponsor_image;

            $result = $this->repo->update($sponsorObj);
            if($result['aceplusStatusCode'] ==  ReturnMessage::OK){
                return redirect()->action('Backend\SponsorController@index')
                    ->withMessage(FormatGenerator::message('Success', 'Sponsor image updated ...'));
            }
            else{
                return redirect()->action('Backend\SponsorController@index')
                    ->withMessage(FormatGenerator::message('Fail', 'Sponsor image did not update ...'));
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
            ->withMessage(FormatGenerator::message('Success', 'Post deleted ...'));

    }
}
