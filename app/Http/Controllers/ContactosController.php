<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contactos;
use App\Http\Requests;
use DB;
use Illuminate\Support\Facades\Redirect;
use Barryvdh\DomPDF\Facade as PDF;


class ContactosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function generacPDF(){
        $contactos=Contactos::all();
        $pdf = PDF::loadView('PDFcontactos', ['contactos' => $contactos]);
        return $pdf->download('Contactos.pdf');
    }

    public function index(Request $request)
    {
        //
        if($request){
            $query=trim($request->get('searchText'));
        $contactos=DB::table('contacto')->where('nombre', 'LIKE', '%'.$query.'%')
        ->orwhere('apaterno', 'LIKE', '%'.$query.'%')->orwhere('amaterno', 'LIKE', '%'.$query.'%')->orwhere('telefono', 'LIKE', '%'.$query.'%')->orwhere('mail', 'LIKE', '%'.$query.'%')->orwhere('direccion', 'LIKE', '%'.$query.'%')->orwhere('idc', 'LIKE', '%'.$query.'%')
        ->paginate(15);
        return view('contacto.index', ["contactos"=>$contactos,"searchText"=>$query]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('contacto.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        //Colocamos la variable en singular
        $contacto=new Contactos;
        $contacto->nombre=$request->nombre;
        $contacto->apaterno=$request->apaterno;
        $contacto->amaterno=$request->amaterno;
        $contacto->telefono=$request->telefono;
        $contacto->mail=$request->mail;
        $contacto->direccion=$request->direccion;
        $contacto->save();
        //return redirect("/pendiente"); Aqui es para que solo me aparesca el create en footer
        return redirect("/contacto")->with([
            'mensaje'=>'Contacto Guardado',
            'accion'=>'guardar'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($idc)
    {
        //
        $contactos=Contactos::findOrFail($idc);
        return view('contacto.show', compact("contactos"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($idc)
    {
        //
        $contactos=Contactos::findOrfail($idc);
        return view ("contacto.edit", compact("contactos"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $idc)
    {
        //
        $contacto=Contactos::findOrFail($idc);
        $contacto->update($request->all());
            return redirect("/contacto")->with([
            'mensaje'=>'Contacto Editado',
            'accion'=>'editar'
        ]);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($idc)
    {
        //
        $contacto=Contactos::findOrFail($idc);
        $contacto->delete();
        return redirect("/contacto")->with([
            'mensaje'=>'Contacto Eliminado',
            'accion'=>'eliminar'
        ]);
    }
}
