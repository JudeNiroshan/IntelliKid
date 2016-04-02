<?php

namespace App\Http\Controllers;
use DB;
use Carbon\Carbon;

use Illuminate\Http\Request;

class Unicode_PdfController extends Controller{

	
	public function dispalyPdf(){
            $pdf = PDF::make();
		    $pdf->addPage('<html><head></head><body><b>Hello World</b></body></html>');
		    $pdf->send();
	}
    
}
	