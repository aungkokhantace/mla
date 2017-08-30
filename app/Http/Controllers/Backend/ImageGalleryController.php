<?php

namespace App\Http\Controllers\Backend;

use App\Backend\GalleryImage\ImageGallery;
use App\Backend\GalleryImage\ImageGalleryRepository;
use App\Backend\GalleryImage\ImageGalleryRepositoryInterface;
use App\Backend\Infrastructure\Forms\ImageGalleryEntryRequest;
use App\Core\FormatGenerator;
use App\Core\ReturnMessage;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;


class ImageGalleryController extends Controller
{
    private $repo;

    public function __construct(ImageGalleryRepositoryInterface $repo)
    {
        $this->repo = $repo;
    }

    public function index(Request $request)
    {
        try{
            if (Auth::guard('User')->check()) {
                $img_galleries      = $this->repo->getImageGallery();
                return view('backend.image_gallery.index')
                ->with('img_galleries', $img_galleries);
            }
            return redirect('/');
        }
        catch(\Exception $e){
            return redirect('/error/204/post');
        }
    }

    public function create(){
        if (Auth::guard('User')->check()) {
            return view('backend.image_gallery.create');
        }
        return redirect('/');
    }

    public function store(ImageGalleryEntryRequest $request){
        $request->validate();

        $name = Input::get('name');

        if(Input::file()){
            $image = Input::file('path');
            $path = base_path().'/public/galleryImages';

            if(! file_exists($path)){
                mkdir($path,0777,true);
            }
            $image_name = Input::file('path')->getClientOriginalName();
            $gallery_image = '/galleryImages/'.$image_name;
            $image->move($path,$image_name);


            // $image = Image::make(sprintf($path .'/%s', $image_name))->resize(150,150)->save();

            $galleryImageObj = new ImageGallery();
            $galleryImageObj->name = $name;
            $galleryImageObj->path = $gallery_image;

            $result = $this->repo->create($galleryImageObj);


            if($result['aceplusStatusCode'] ==  ReturnMessage::OK){
                return redirect()->action('Backend\ImageGalleryController@index')
                    ->withMessage(FormatGenerator::message('Success', 'Image created ...'));
            }
            else{
                return redirect()->action('Backend\ImageGalleryController@index')
                    ->withMessage(FormatGenerator::message('Fail', 'Image did not create ...'));
            }
        }

    }

    public function edit($id){
        if (Auth::guard('User')->check()) {
            $image_gallery = $this->repo->getObjByID($id);
            return view('backend.image_gallery.create')->with('image_gallery',$image_gallery);
        }
        return redirect('/');
    }

    public function update(ImageGalleryEntryRequest $request){
        $request->validate();
        $id = Input::get('id');

        $name = Input::get('name');

        if(Input::file()) {
            $image = Input::file('path');
            $path = base_path() . '/public/galleryImages';

            if (!file_exists($path)) {
                mkdir($path, 0777, true);
            }
            $image_name = Input::file('path')->getClientOriginalName();
            $gallery_image = '/galleryImages/' . $image_name;
            $image->move($path, $image_name);

            // $image = Image::make(sprintf($path .'/%s', $image_name))->resize(150,150)->save();

            $galleryImageObj = ImageGallery::find($id);
            $galleryImageObj->name = $name;
            $galleryImageObj->path = $gallery_image;

            $result = $this->repo->update($galleryImageObj);
            if($result['aceplusStatusCode'] ==  ReturnMessage::OK){
                return redirect()->action('Backend\ImageGalleryController@index')
                    ->withMessage(FormatGenerator::message('Success', 'Image updated ...'));
            }
            else{
                return redirect()->action('Backend\ImageGalleryController@index')
                    ->withMessage(FormatGenerator::message('Fail', 'Image did not update ...'));
            }
        }

    }
    public function destroy(){
        $id         = Input::get('selected_checkboxes');
        $new_string = explode(',', $id);
        foreach($new_string as $id){
            $this->repo->delete($id);
        }

        return redirect()->action('Backend\ImageGalleryController@index')
            ->withMessage(FormatGenerator::message('Success', 'Image deleted ...'));

    }
}
