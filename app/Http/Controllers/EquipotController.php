<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Equipot;
use App\Http\Requests;
use DB;
use Illuminate\Support\Facades\Redirect;
use Barryvdh\DomPDF\Facade as PDF;

class EquipotController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function generaetPDF(){
        $equipots=Equipot::all();
        $pdf = PDF::loadView('PDFequipotransporte', ['equipots' => $equipots]);
        return $pdf->download('EquipoTransporte.pdf');
    }
    public function index(Request $request)
    {
        //
        if($request){
            $query=trim($request->get('searchText'));
        $equipots=DB::table('equipotransporte')->where('idet', 'LIKE', '%'.$query.'%')
        ->orwhere('detalleset', 'LIKE', '%'.$query.'%')->orwhere('marcaet', 'LIKE', '%'.$query.'%')->orwhere('modeloet', 'LIKE', '%'.$query.'%')->orwhere('numeroserie', 'LIKE', '%'.$query.'%')
        ->paginate(15);
        return view('equipotransporte.index', ["equipots"=>$equipots,"searchText"=>$query]);
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
        return view('equipotransporte.create');
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
        //
        if($request->hasFile('fotoet')){
            $file = $request->file('fotoet');
            $name = time().$file->getClientOriginalName();
            $file->move(public_path().'/imgProductos/',$name);
        }

        $equipot=new Equipot;
        $equipot->detalleset=$request-> detalleset;
        $equipot->marcaet=$request-> marcaet;
        $equipot->modeloet=$request-> modeloet; 
        $equipot->numeroserie=$request-> numeroserie;    
        
        $equipot->fotoet=$request-> fotoet;
        $equipot->fotoet=$name;
        $equipot->save();

        return redirect("/equipotransporte")->with([
            'mensaje'=>'Registro de Equipo de Transporte Guardado',
            'accion'=>'guardar'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($idet)
    {
        //
        $equipots=Equipot::findOrfail($idet);
        return view('equipotransporte.show', compact('equipots'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($idet)
    {
        //
        $equipots=Equipot::findOrfail($idet);
        return view ("equipotransporte.edit", compact("equipots"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $idet)
    {
        //
        $equipot=Equipot::findOrfail($idet);
        $equipot->update($request->all());
         return redirect("/equipotransporte")->with([
                'mensaje'=>'Registro de Equipo de Transporte Actualizado',
                'accion'=>'editar'
          ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($idet)
    {
        //
        $equipot=Equipot::findOrfail($idet);
        $equipot->delete();
         return redirect("/equipotransporte")->with([
                'mensaje'=>'Registro de Equipo de Transporte Eliminado',
                'accion'=>'eliminar'
                 ]);
    }
}
