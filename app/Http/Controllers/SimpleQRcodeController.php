<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use SimpleSoftwareIO\QrCode\Facades\QrCode; 

class SimpleQRcodeController extends Controller
{
    

    public function generate(){

        $qrcode = QrCode::size(200)->email("uservote2@gmail.com", "Salutations", "Marcol vous salue"); 

        return view("simple-qrcode", compact('qrcode')); 

    }
}
