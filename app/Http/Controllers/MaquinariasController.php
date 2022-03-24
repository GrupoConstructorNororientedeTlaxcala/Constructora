<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Maquinaria;
use App\Http\Requests;
use DB;
use Illuminate\Support\Facades\Redirect;
use Barryvdh\DomPDF\Facade as PDF;

class MaquinariasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function generamPDF(){
        $maquinarias=Maquinaria::all();
        $pdf = PDF::loadView('PDFmaquinaria', ['maquinarias' => $maquinarias]);
        return $pdf->download('Maquinaria.pdf');
    }
    public function index(Request $request)
    {
        //
        if($request){
            $query=trim($request->get('searchText'));
        $maquinarias=DB::table('maquinaria')->where('id', 'LIKE', '%'.$query.'%')
        ->orwhere('detallesm', 'LIKE', '%'.$query.'%')->orwhere('marca', 'LIKE', '%'.$query.'%')->orwhere('modelo', 'LIKE', '%'.$query.'%')->orwhere('numserie', 'LIKE', '%'.$query.'%')
        ->paginate(15);
        return view('maquinaria.index', ["maquinarias"=>$maquinarias,"searchText"=>$query]);
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
        return view('maquinaria.create');
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
        if($request->hasFile('fotom')){
            $file = $request->file('fotom');
            $name = time().$file->getClientOriginalName();
            $file->move(public_path().'/imgProductos/',$name);
        }

        $maquinaria=new Maquinaria;
        $maquinaria->detallesm=$request-> detallesm;
        $maquinaria->marca=$request-> marca;
        $maquinaria->modelo=$request-> modelo; 
        $maquinaria->numserie=$request-> numserie;    
        
        $maquinaria->fotom=$request-> fotom;
        $maquinaria->fotom=$name;
        $maquinaria->save();

        return redirect("/maquinaria")->with([
            'mensaje'=>'Registro de Maquinaria Guardado',
            'accion'=>'guardar'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $maquinarias=Maquinaria::findOrfail($id);
        return view('maquinaria.show', compact('maquinarias'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $maquinarias=Maquinaria::findOrfail($id);
        return view ("maquinaria.edit", compact("maquinarias"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $maquinaria=Maquinaria::findOrfail($id);
        $maquinaria->update($request->all());
         return redirect("/maquinaria")->with([
                'mensaje'=>'Registro de Maquinaria Actualizado',
                'accion'=>'editar'
          ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $maquinaria=Maquinaria::findOrfail($id);
        $maquinaria->delete();
         return redirect("/maquinaria")->with([
                'mensaje'=>'Registro de Maquinaria Eliminado',
                'accion'=>'eliminar'
                 ]);
    }
}
