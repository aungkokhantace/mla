<?php

namespace App\Http\Controllers\Sample;

use App\Sample\Test\Test;
use App\Sample\Test\TestRepositoryInterface;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ChartController extends Controller
{
    private $testRepository;
//    public $tbTest = "";

    public function __construct(TestRepositoryInterface $testRepository){
        $this->testRepository = $testRepository;
        $this->tbTest = (new Test())->getTable();
    }

    public function index(){
        $testForPie = $this->testRepository->countTestByStatus();

        $testForLine = $this->testRepository->countTestByDate();

//        dd(json_encode($testForLine));

        return view('sample.chartSample')->with('testForPie',$testForPie)
                                         ->with('testForLine',$testForLine);
    }

}
