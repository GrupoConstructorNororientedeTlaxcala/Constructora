<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Presupuesto;
use App\Http\Requests;
use DB;
use Illuminate\Support\Facades\Redirect;
use Barryvdh\DomPDF\Facade as PDF;

class PresupuestosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function generapsPDF(){
        $presupuestos=Presupuesto::all();
        $pdf = PDF::loadView('PDFpresupuesto', ['presupuestos' => $presupuestos]);
        return $pdf->download('Presupuestos.pdf');
    }

    public function index(Request $request)
    {
        //
         if($request){
            $query=trim($request->get('searchText'));
        $presupuestos=DB::table('presupuesto')->where('fechaelaboracion', 'LIKE', '%'.$query.'%')
        ->orwhere('nombrecliente', 'LIKE', '%'.$query.'%')->orwhere('material', 'LIKE', '%'.$query.'%')->orwhere('monto', 'LIKE', '%'.$query.'%')->orwhere('idpr', 'LIKE', '%'.$query.'%')
        ->paginate(15);
        return view('presupuesto.index', ["presupuestos"=>$presupuestos,"searchText"=>$query]);
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
        return view('presupuesto.create');
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
        $presupuesto=new Presupuesto;
        $presupuesto->fechaelaboracion=$request->fechaelaboracion;
        $presupuesto->material=$request->material;
        $presupuesto->monto=$request->monto;
        $presupuesto->nombrecliente=$request->nombrecliente;
        $presupuesto->save();
        //return redirect("/pendiente"); Aqui es para que solo me aparesca el create en footer
        return redirect("/presupuesto")->with([
            'mensaje'=>'Presupuesto Guardado',
            'accion'=>'guardar'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($idpr)
    {
        //
        $presupuestos=Presupuesto::findOrFail($idpr);
        return view('presupuesto.show', compact("presupuestos"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($idpr)
    {
        //
        $presupuestos=Presupuesto::findOrfail($idpr);
        return view ("presupuesto.edit", compact("presupuestos"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $idpr)
    {
        //
        $presupuesto=Presupuesto::findOrFail($idpr);
        $presupuesto->update($request->all());
            return redirect("/presupuesto")->with([
            'mensaje'=>'Presupuesto Editado',
            'accion'=>'editar'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($idpr)
    {
        //
        $presupuesto=Presupuesto::findOrFail($idpr);
        $presupuesto->delete();
        return redirect("/presupuesto")->with([
            'mensaje'=>'Presupuesto Eliminado',
            'accion'=>'eliminar'
        ]);
    }
}
