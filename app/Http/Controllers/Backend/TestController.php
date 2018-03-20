<?php

namespace App\Http\Controllers\Backend;


use App\Backend\Page\PageRepository;
use App\Backend\Test\Test;
use App\Backend\Test\TestRepositoryInterface;
use App\Core\FormatGenerator;
use App\Core\ReturnMessage;
use DOMDocument;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Intervention\Image\Facades\Image;
use App\Core\Utility;

class TestController extends Controller
{
    private $repo;

    public function __construct(TestRepositoryInterface $repo)
    {
        $this->repo = $repo;
    }

    public function index(Request $request)
    {
        try{
            if (Auth::guard('User')->check()) {
                $tests      = $this->repo->getObjs();
                return view('backend.test.index')->with('tests', $tests);
            }
            return redirect('/');
        }
        catch(\Exception $e){
            return redirect('/error/204/test');
        }
    }

    public function create(){
        if (Auth::guard('User')->check()) {
            return view('backend.test.test');
        }
        return redirect('/');
    }

    /**
     * @param Request $request
     * @return mixed
     */
    public function store(Request $request)
    {
        $table = (new Test())->getTable();

        // $request->validate();
        $test_content = Input::get('test_content');

        $paramObj                   = new Test();
        $paramObj->content          = $test_content;


       /* //start saving image
        $dom = new DomDocument();

        if(isset($content) && $content != ""){
            $dom->loadHtml($content, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);

            $images = $dom->getElementsByTagName('img');

            // foreach <img> in the submitted message
            foreach($images as $img){
                $src = $img->getAttribute('src');

                // if the img source is 'data-url'
                if(preg_match('/data:image/', $src)){

                    // get the mimetype
                    preg_match('/data:image\/(?<mime>.*?)\;/', $src, $groups);
                    $mimetype = $groups['mime'];

                    // Generating a random filename
                    $filename = uniqid();
                    $filepath = "/images/$filename.$mimetype";

                    // @see http://image.intervention.io/api/
                    $image = Image::make($src)
                        // resize if required
                        //->resize(300, 200)
                        ->encode($mimetype, 100) 	// encode file to the specified mimetype
                        ->save(public_path($filepath));

                    $new_src = asset($filepath);
                    $img->removeAttribute('src');
                    $img->setAttribute('src', $new_src);

                } // <!--endif
            } // <!--endforeach
        }

        $paramObj->content = $dom->saveHTML();
        //End saving image */

        $result = $this->repo->create($paramObj);

        if($result['aceplusStatusCode'] ==  ReturnMessage::OK){
            return redirect()->action('Backend\TestController@index')
                ->withMessage(FormatGenerator::message('Success', 'Test created ...'));
        }
        else{
            return redirect()->action('Backend\TestController@index')
                ->withMessage(FormatGenerator::message('Fail', 'Test did not create ...'));
        }
    }

    public function edit($id){
        if (Auth::guard('User')->check()) {
            $test = $this->repo->getObjByID($id);
            return view('backend.test.test')->with('test', $test);
        }
        return redirect('/');
    }

    public function update(Request $request){
        // $request->validate();

        $id = Input::get('id');
        $test_content  = Input::get('test_content');

        $paramObj = Test::find($id);
        $paramObj->content          = $test_content;

//         //start saving image
//        $dom = new DomDocument();
//
//        if(isset($detail) && $detail != ""){
//            $dom->loadHtml($detail, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
//
//            $images = $dom->getElementsByTagName('img');
//
//            // foreach <img> in the submitted message
//            foreach($images as $img){
//                $src = $img->getAttribute('src');
//
//                // if the img source is 'data-url'
//                if(preg_match('/data:image/', $src)){
//
//                    // get the mimetype
//                    preg_match('/data:image\/(?<mime>.*?)\;/', $src, $groups);
//                    $mimetype = $groups['mime'];
//
//                    // Generating a random filename
//                    $filename = uniqid();
//                    $filepath = "/images/$filename.$mimetype";
//
//                    // @see http://image.intervention.io/api/
//                    $image = Image::make($src)
//                        // resize if required
//                        /* ->resize(300, 200) */
//                        ->encode($mimetype, 100) 	// encode file to the specified mimetype
//                        ->save(public_path($filepath));
//
//                    $new_src = asset($filepath);
//                    $img->removeAttribute('src');
//                    $img->setAttribute('src', $new_src);
//
//                } // <!--endif
//            } // <!--endforeach
//        }
//
//        $paramObj->detail = $dom->saveHTML();
//        //End saving image
        $result = $this->repo->update($paramObj);

        if($result['aceplusStatusCode'] ==  ReturnMessage::OK){
            return redirect()->action('Backend\TestController@index')
                ->withMessage(FormatGenerator::message('Success', 'Test updated ...'));
        }
        else{
            return redirect()->action('Backend\TestController@index')
                ->withMessage(FormatGenerator::message('Fail', 'Test did not update ...'));
        }

    }

    public function destroy(){
        $id         = Input::get('selected_checkboxes');
        $new_string = explode(',', $id);
        foreach($new_string as $id){
            $this->repo->delete($id);
        }

        return redirect()->action('Backend\TestController@index')
            ->withMessage(FormatGenerator::message('Success', 'Test deleted ...'));

    }

    public function emailTest(){
        $template = "backend/registrationconfirmadminemail/registrationconfirmadminemail";
        $email = ['aungkokhantace@gmail.com','aungkokhant@aceplussolutions.com'];
        $subject = "Email Test";

        Utility::sendEmail($template, $email, $subject);
        alert('Email successfully sent!')->persistent('OK');
        return redirect()->action('Frontend\HomeController@index');
    }
}
