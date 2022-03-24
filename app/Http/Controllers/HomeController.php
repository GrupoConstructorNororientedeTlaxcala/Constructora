<?php

namespace App\Http\Controllers;
use App\Pagina;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        /*Aqui coloco lo primero que muestra al entrar a admin*/
        $paginas=Pagina::paginate(5);
        return view('pendientes.index', compact('paginas'));

      /*return view('home');*/
    }

    public function buscar(Request $request){
        $var=$request->input('busca');

        $empleado=empleados::where('nombre',$var)->get();
        return $empleado;
    }

    public function comen()
    {
        return view("bizcocheria", compact("bizcochos") );
    }
    public function ped()
    {
        return view("pedidos", compact("pedidos") );
    }
}
