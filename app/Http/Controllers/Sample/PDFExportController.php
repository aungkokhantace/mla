<?php

namespace App\Http\Controllers\Sample;

use App\Sample\Test\Test;
use App\Sample\Test\TestRepositoryInterface;
use Elibyy\TCPDF\Facades\TCPDF;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PDFExportController extends Controller
{
    private $testRepository;
    public $tbTest = "";

    public function __construct(TestRepositoryInterface $testRepository){
        $this->testRepository = $testRepository;
        $this->tbTest = (new Test())->getTable();
    }

    public function index(){
        return view('sample.pdfExportSample');
    }

    public function pdfExport(){
        $tests  = $this->testRepository->getAllTest();

        $view = \View::make('sample.pdfExportViewSample',compact('tests'));
        $html = $view->render();

        $pdf = new TCPDF();
        $pdf::SetTitle('PDF Export Sample');
        $pdf::AddPage();
        $pdf::writeHTML($html, true, false, true, false, '');
        $pdf::Output('pdf_export_sample.pdf');

    }
}
