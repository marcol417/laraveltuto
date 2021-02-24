<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client; 
use PDF; 

class PdfController extends Controller
{
    public function show(Client $client){
        $pdf = PDF::loadView('showPdf', compact('client')); 

        return $pdf->download(\Str::slug($client->name).".pdf"); 
    }
}
