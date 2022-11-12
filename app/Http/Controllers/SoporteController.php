<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail as FacadesMail;

class SoporteController extends Controller
{
    public function contact(Request $request){
        $subject = "Nueva PQR";
        $for = "tatismayo@hotmail.com";
        FacadesMail::send('mail.soporte',$request->all(), function($msj) use($subject,$for){
            $msj->from("tatismayo@gmail.com","Soporte Sig RegvloG");
            $msj->subject($subject);
            $msj->to($for);
        });
        return redirect()->back()->with('success', 'Su PQR a sido enviada con exito');
    }
}
