<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Obras;
use App\Http\Requests;
use DB;
use Illuminate\Support\Facades\Redirect;
use Barryvdh\DomPDF\Facade as PDF;

class ObrasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function generaoPDF(){
        $obras=Obras::all();
        $pdf = PDF::loadView('PDFobras', ['obras' => $obras]);
        return $pdf->download('ObraCivil.pdf');
    }




    public function index(Request $request)
    {
        //
       /** if($request){
            $query=trim($request->get('searchText'));
        $obras=DB::table('obracivil')->where('datoscliente', 'LIKE', '%'.$query.'%')
        ->orwhere('descripciono', 'LIKE', '%'.$query.'%')->orwhere('estatus', 'LIKE', '%'.$query.'%')->orwhere('fechainicio', 'LIKE', '%'.$query.'%')->orwhere('fechafin', 'LIKE', '%'.$query.'%')->orwhere('montototal', 'LIKE', '%'.$query.'%')->orwhere('numcontrato', 'LIKE', '%'.$query.'%')->orwhere('ido', 'LIKE', '%'.$query.'%')
        ->paginate(15);
        return view('obracivil.index', ["obras"=>$obras,"searchText"=>$query]);
        
        }*/
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
         return view('obracivil.create');
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
        $obra=new Obras;
        $obra->datoscliente=$request->datoscliente;
        $obra->descripciono=$request->descripciono;
        $obra->estatus=$request->estatus;
        $obra->fechainicio=$request->fechainicio;
        $obra->fechafin=$request->fechafin;
        $obra->montototal=$request->montototal;
        $obra->numcontrato=$request->numcontrato;
        $obra->save();
        //return redirect("/pendiente"); Aqui es para que solo me aparesca el create en footer
        return redirect("/obracivil")->with([
            'mensaje'=>'Obra Civil Guardada',
            'accion'=>'guardar'
        ]);
    }

/**public function usuario()
{
    return $this->belongsTo('App\Usuario', 'usuario_id');
}
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($ido)
    {
        //
        $obras=Obras::findOrFail($ido);
        return view('obracivil.show', compact("obras"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($ido)
    {
        //
        $obras=Obras::findOrfail($ido);
        return view ("obracivil.edit", compact("obras"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $ido)
    {
        //Colocamos la variabloe en singular
        $obra=Obras::findOrFail($ido);
        $obra->update($request->all());
            return redirect("/obracivil")->with([
            'mensaje'=>'Obra Civil Editada',
            'accion'=>'editar'
        ]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($ido)
    {
        //
        $obra=Obras::findOrFail($ido);
        $obra->delete();
        return redirect("/obracivil")->with([
            'mensaje'=>'Obra Civil Eliminado',
            'accion'=>'eliminar'
        ]);
    }
}
