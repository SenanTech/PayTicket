<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;

class PaymentController extends Controller
{

    
function SavePayment(Request $req){

    $payment = new Payment();
    $payment->montant = 5000;
    $payment->transaction_id = $req['transaction_id'] ;
    $payment->save();

    return redirect()->route('home')
    ->with('session', 'Transaction éffectué avec succès '.$payment->transaction_id);

}

}
