<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dleempresa;
use App\Http\Requests;
use DB;
use Illuminate\Support\Facades\Redirect;
use Barryvdh\DomPDF\Facade as PDF; 

class DlempresaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function generadPDF(){
        $empresas=Dleempresa::all();
        $pdf = PDF::loadView('PDFempresa', ['empresas' => $empresas]);
        return $pdf->download('Empresa.pdf');
    }

    public function index(Request $request)
    {
        //
        if($request){
            $query=trim($request->get('searchText'));
        $empresas=DB::table('dlempresa')->where('nombred', 'LIKE', '%'.$query.'%')
        ->orwhere('fecha', 'LIKE', '%'.$query.'%')->orwhere('descripcion', 'LIKE', '%'.$query.'%')->orwhere('ide', 'LIKE', '%'.$query.'%')
        ->paginate(12);
        return view('empresa.index', ["empresas"=>$empresas,"searchText"=>$query]);
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
        return view('empresa.create');
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
        if($request->hasFile('escaneo')){
            $file = $request->file('escaneo');
            $name = time().$file->getClientOriginalName();
            $file->move(public_path().'/imgProductos/',$name);
        }

        $empresa=new Dleempresa;
        $empresa->nombred=$request-> nombred;
        $empresa->fecha=$request-> fecha;
        $empresa->descripcion=$request-> descripcion;        
        
        $empresa->escaneo=$request-> escaneo;
        $empresa->escaneo=$name;
        $empresa->save();

        return redirect("/empresa")->with([
            'mensaje'=>'Información Guardada',
            'accion'=>'guardar'
        ]);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($ide)
    {
        //
        
        $empresas=Dleempresa::findOrfail($ide);
        return view('empresa.show', compact('empresas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($ide)
    {
        //
        $empresas=Dleempresa::findOrfail($ide);
        return view ("empresa.edit", compact("empresas"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $ide)
    {
        //
        $empresa=Dleempresa::findOrfail($ide);
        $empresa->update($request->all());
     return redirect("/empresa")->with([
            'mensaje'=>'Información Actualizada',
            'accion'=>'editar'
      ]);  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($ide)
    {
        //
        $empresa=Dleempresa::findOrfail($ide);
        $empresa->delete();
     return redirect("/empresa")->with([
            'mensaje'=>'Información Eliminada',
            'accion'=>'eliminar'
             ]);
    }
}
