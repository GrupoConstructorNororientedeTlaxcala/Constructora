<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pagina;
use App\Http\Requests;
use DB;
use Illuminate\Support\Facades\Redirect;


class PaginasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Colocamos la variable en plural
        $paginas=Pagina::paginate(4);
        return view('pendientes.index', compact('paginas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('pendientes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Colocamos la variable en singular
        $pagina=new Pagina;
        $pagina->titulo=$request->titulo;
        $pagina->descripcionp=$request->descripcionp;
        $pagina->save();
        //return redirect("/pendiente"); Aqui es para que solo me aparesca el create en footer
        return redirect("/pendientes")->with([
            'mensaje'=>'Pendiente Guardado',
            'accion'=>'guardar'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $idp
     * @return \Illuminate\Http\Response
     */
    public function show($idp)
    {
        //Colocamos variable en singular
        $pagina=Pagina::findOrFail($idp);
        return view('pendientes.show', compact("pagina"));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $idp
     * @return \Illuminate\Http\Response
     */
    public function edit($idp)
    {
        //colocamos variable en singular
        $pagina=Pagina::findOrFail($idp);
        return view ("pendientes.edit", compact("pagina"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $idp
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $idp)
    {
        //Colocamos la variabloe en singular
        $pagina=Pagina::findOrFail($idp);
        $pagina->update($request->all());
            return redirect("/pendientes")->with([
            'mensaje'=>'Pendiente Editado',
            'accion'=>'editar'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $idp
     * @return \Illuminate\Http\Response
     */
    public function destroy($idp)
    {
        //
        $pagina=Pagina::findOrFail($idp);
        $pagina->delete();
        return redirect("/pendientes")->with([
            'mensaje'=>'Pendiente Eliminado',
            'accion'=>'eliminar'
        ]);
    }
}
