<?php

namespace App\Http\Controllers\Backend;

use App\Backend\EventEmail\EventEmail;
use App\Backend\EventEmail\EventEmailRepositoryInterface;
use App\Backend\Infrastructure\Forms\EventEmailEditRequest;
use App\Backend\Infrastructure\Forms\EventEmailEntryRequest;
use App\Core\FormatGenerator;
use App\Core\ReturnMessage;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;

class EventEmailController extends Controller
{
    private $repo;

    public function __construct(EventEmailRepositoryInterface $repo)
    {
        $this->repo = $repo;
    }

    public function index(Request $request)
    {
        try{
            if (Auth::guard('User')->check()) {
                $eventemails      = $this->repo->getObjs();
                return view('backend.eventemail.index')->with('eventemails', $eventemails);
            }
            return redirect('/');
        }
        catch(\Exception $e){
            return redirect('/error/204/eventemail');
        }
    }

    public function create(){
        if (Auth::guard('User')->check()) {
            return view('backend.eventemail.eventemail');
        }
        return redirect('/');
    }

    public function store(EventEmailEntryRequest $request)
    {
        $request->validate();
        $email          =  Input::get('email');
        $description    =  Input::get('description');
        $type           =  Input::get('type');

        $paramObj = new EventEmail();
        $paramObj->email        = $email;
        $paramObj->description  = $description;
        $paramObj->type         = $type;

        $result = $this->repo->create($paramObj);

        if($result['aceplusStatusCode'] ==  ReturnMessage::OK){
            return redirect()->action('Backend\EventEmailController@index')
                ->withMessage(FormatGenerator::message('Success', 'Event Email created ...'));
        }
        else{
            return redirect()->action('Backend\EventEmailController@index')
                ->withMessage(FormatGenerator::message('Fail', 'Event Email did not create ...'));
        }
    }

    public function edit($id){
        if (Auth::guard('User')->check()) {
            $eventemail = $this->repo->getObjByID($id);
            return view('backend.eventemail.eventemail')->with('eventemail', $eventemail);
        }
        return redirect('/');
    }

    public function update(EventEmailEditRequest $request){
        $request->validate();
        $id = Input::get('id');
        $email          =  Input::get('email');
        $description    =  Input::get('description');
        $type           =  Input::get('type');

        $paramObj = EventEmail::find($id);
        $paramObj->email        = $email;
        $paramObj->description  = $description;
        $paramObj->type         = $type;

        $result = $this->repo->update($paramObj);

        if($result['aceplusStatusCode'] ==  ReturnMessage::OK){
            return redirect()->action('Backend\EventEmailController@index')
                ->withMessage(FormatGenerator::message('Success', 'Event Email updated ...'));
        }
        else{
            return redirect()->action('Backend\EventEmailController@index')
                ->withMessage(FormatGenerator::message('Fail', 'Event Email did not update ...'));
        }
    }

    public function destroy(){

        $id         = Input::get('selected_checkboxes');
        $new_string = explode(',', $id);
        $delete_flag = true;
        foreach($new_string as $id){
            $this->repo->delete($id);
        }
        if($delete_flag){
            return redirect()->action('Backend\EventEmailController@index')
                ->withMessage(FormatGenerator::message('Success', 'Event Email deleted ...'));
        }
        else{
            return redirect()->action('Backend\EventEmailController@index')
                ->withMessage(FormatGenerator::message('Fail', 'Event Email did not delete ...'));
        }
    }
}
