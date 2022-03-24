<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contrato;
use App\Http\Requests;
use DB;
use Illuminate\Support\Facades\Redirect;
use Barryvdh\DomPDF\Facade as PDF;

class ContratoController extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     * @return \Illuminate\Http\Response
     */
    public function generactPDF(){
        $contratos=Contrato::all();
        $pdf = PDF::loadView('PDFcontratos', ['contratos' => $contratos]);
        return $pdf->download('Contratos.pdf');
    }

    public function index(Request $request)
    {
        //
        if($request){
            $query=trim($request->get('searchText'));
        $contratos=DB::table('contrato')->where('numcontrato', 'LIKE', '%'.$query.'%')
        ->orwhere('fechact', 'LIKE', '%'.$query.'%')->orwhere('descripcionct', 'LIKE', '%'.$query.'%')->orwhere('montoct', 'LIKE', '%'.$query.'%')->orwhere('idct', 'LIKE', '%'.$query.'%')
        ->paginate(15);
        return view('contrato.index', ["contratos"=>$contratos,"searchText"=>$query]);
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
        return view('contrato.create');
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
        if($request->hasFile('fotoct')){
            $file = $request->file('fotoct');
            $name = time().$file->getClientOriginalName();
            $file->move(public_path().'/imgProductos/',$name);
        }

        $contrato=new Contrato;
        $contrato->numcontrato=$request-> numcontrato;
        $contrato->fechact=$request-> fechact;
        $contrato->descripcionct=$request-> descripcionct; 
        $contrato->montoct=$request-> montoct;    
        
        $contrato->fotoct=$request-> fotoct;
        $contrato->fotoct=$name;
        $contrato->save();

        return redirect("/contrato")->with([
            'mensaje'=>'Contrato Guardado',
            'accion'=>'guardar'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($idct)
    {
        //
        $contratos=Contrato::findOrfail($idct);
        return view('contrato.show', compact('contratos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($idct)
    {
        //
        $contratos=Contrato::findOrfail($idct);
        return view ("contrato.edit", compact("contratos"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $idct)
    {
        //
        $contrato=Contrato::findOrfail($idct);
        $contrato->update($request->all());
         return redirect("/contrato")->with([
                'mensaje'=>'Contrato Actualizado',
                'accion'=>'editar'
          ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($idct)
    {
        //
        $contrato=Contrato::findOrfail($idct);
        $contrato->delete();
         return redirect("/contrato")->with([
                'mensaje'=>'Contrato Eliminado',
                'accion'=>'eliminar'
                 ]);
    }
}
