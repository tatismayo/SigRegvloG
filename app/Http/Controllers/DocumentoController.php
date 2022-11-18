<?php

namespace App\Http\Controllers;

use App\Models\Documento;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class DocumentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $documento = new Documento();
        $documento->nombreDoc = $request->nombre;
        $request->validate([
            'documento' => 'mimes:pdf,doc,docx,pptx,xlsx'
        ]);
        $documento->rutaDoc = $request->documento->store('','documentos');
        $documento->fechaDoc = now();
        $documento->submoduloDoc = $request->submodulo;
        $documento->tipoDoc = $request->tipo;
        $documento->estadoDoc = 'Pendiente Revisión';
        $documento->User_id = auth()->id();
        $documento->save();

        // $subject = "Nuevo documento cargado";
        // $for = "tatismayo@hotmail.com";
        // Mail::send('mail.docAdmin',$request->all(), function($msj) use($subject,$for){
        //     $msj->from("tatismayo@gmail.com","Notificaciones Sig Revlog");
        //     $msj->subject($subject);
        //     $msj->to($for);
        // });

        // $subject = "Su documento esta pendiente de aprobación";
        // $for = User::find(auth()->id())->email;
        // Mail::send('mail.docUser',$request->all(), function($msj) use($subject,$for){
        //     $msj->from("tatismayo@gmail.com","Notificaciones Sig Revlog");
        //     $msj->subject($subject);
        //     $msj->to($for);
        // });

        return Redirect::route('documentos', [$request->modulo, $request->submodulo, $request->tipo])->with('success', 'Documento cargado exitosamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Documento  $documento
     * @return \Illuminate\Http\Response
     * .0
     */
    public function show(Documento $documento)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Documento  $documento
     * @return \Illuminate\Http\Response
     */
    public function edit(Documento $documento)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Documento  $documento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Documento $documento)
    {
        $documento->estadoDoc = 'Aprobado';
        $documento->save();
        // $subject = "Su documento ha sido aprobado con éxito";
        // $for = User::find($documento->User_id)->email;
        // Mail::send('mail.docAprob',$request->all(), function($msj) use($subject,$for){
        //     $msj->from("tatismayo@gmail.com","Notificaciones Sig Revlog");
        //     $msj->subject($subject);
        //     $msj->to($for);
        // });
        return redirect()->back()->with('success', 'Documento aprobado exitosamente');
    }

    public function obsoleto(Request $request, Documento $documento)
    {
        $documento->estadoDoc = 'Obsoleto';
        $documento->save();
        return redirect()->back()->with('success', 'Documento marcado como obsoleto');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Documento  $documento
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Documento $documento)
    {
        $documento->delete();
        Storage::disk('public')->delete('/documents/'.$documento->rutaDoc);

        // $subject = "El documento ha sido rechazado";
        // $for = User::find($documento->User_id)->email;
        // Mail::send('mail.docRechazo',$request->all(), function($msj) use($subject,$for){
        //     $msj->from("tatismayo@gmail.com","Notificaciones Sig Revlog");
        //     $msj->subject($subject);
        //     $msj->to($for);
        // });
        return redirect()->back()->with('success', 'Documento Rechazado');
    }
}
