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
class SystemReferenceController extends Controller
{
    private $repo;

    public function __construct()
    {
        
    }

    public function index(Request $request)
    {
        try{
            if (Auth::guard('User')->check()) {
                return view('backend.systemreference.index');
            }
            return redirect('/');
        }
        catch(\Exception $e){
            return redirect('backend/error/204/system_reference');
        }

    }
}
