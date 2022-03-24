<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Plano;
use App\Http\Requests;
use DB;
use Illuminate\Support\Facades\Redirect;
use Barryvdh\DomPDF\Facade as PDF;

class PlanosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function generapPDF(){
        $planos=Plano::all();
        $pdf = PDF::loadView('PDFplanos', ['planos' => $planos]);
        return $pdf->download('Planos.pdf');
    }

    public function index(Request $request)
    {
        //
         if($request){
            $query=trim($request->get('searchText'));
        $planos=DB::table('plano')->where('nombreplano', 'LIKE', '%'.$query.'%')
        ->orwhere('nombreelaborador', 'LIKE', '%'.$query.'%')->orwhere('idpl', 'LIKE', '%'.$query.'%')
        ->paginate(15);
        return view('plano.index', ["planos"=>$planos,"searchText"=>$query]);
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
         return view('plano.create');
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
        $plano=new Plano;
        $plano->nombreelaborador=$request->nombreelaborador;
        $plano->nombreplano=$request->nombreplano;
        $plano->save();
        //return redirect("/pendiente"); Aqui es para que solo me aparesca el create en footer
        return redirect("/plano")->with([
            'mensaje'=>'Plano Guardada',
            'accion'=>'guardar'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($idpl)
    {
        //
        $planos=Plano::findOrFail($idpl);
        return view('plano.show', compact("planos"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($idpl)
    {
        //
        $planos=Plano::findOrfail($idpl);
        return view ("plano.edit", compact("planos"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $idpl)
    {
        //Colocamos la variabloe en singular
        $plano=Plano::findOrFail($idpl);
        $plano->update($request->all());
            return redirect("/plano")->with([
            'mensaje'=>'Plano Editada',
            'accion'=>'editar'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($idpl)
    {
         //
        $plano=Plano::findOrFail($idpl);
        $plano->delete();
        return redirect("/plano")->with([
            'mensaje'=>'Plano Eliminado',
            'accion'=>'eliminar'
        ]);
    }
}
