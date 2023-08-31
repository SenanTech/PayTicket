<?php

namespace App\Http\Controllers;

use PDF;

use Illuminate\Http\Request;




use SimpleSoftwareIO\QrCode\Facades\QrCode;

class Facture extends Controller
{
    public function generate(){
        $qrcode = QrCode::encoding('UTF-8')->size(200)->generate('Je suis un QR Code', '../public/qrCode.svg');
        
        $pdf = PDF::loadView('facture');

        // Lancement du téléchargement du fichier PDF
        return $pdf->stream();
    	
    }
}