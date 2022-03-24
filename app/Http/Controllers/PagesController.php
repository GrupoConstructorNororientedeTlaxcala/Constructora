<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
      public function quienessomos(){
      return view('quienessomos.index');
     } 

            public function index(){
      return view('index');
    }



          public function principal(){
      return view('principal');
    }

        public function Terminos(){
      return view('Terminos');
    }
      public function politicas(){
      return view('politicas');
    }
     public function misionyvision(){
      return view('misionyvision.index');
    }
    public function blog(){
      return view('blog.index');
    }
    
   
    
    /*
    public function principal(){
    	return view('principal');
    }
    /*public function contactoss(){
    	return "Estoy en el metodo contactoss";
        }
        */
      /*
       public function contactoss(){
       	return view('contacto');
      }

      */
     /*
     public function login(){
     	return view('login');
     }
     public function panaderia(){
     	return view('panaderia');
     }
     
    */
    
     /*Aqui comienso a comentar

     public function login(){
      return view('login');
     }
    

     public function panaderia(){
      return view('panaderia');
     }

     public function pasteleria(){
      return view('pasteleria');
     }
*/
   
   /* 
    public function usuarios(){
        return view('usuarios');
       }
    public function catalogo(){
      return view('catalogo');
    }
    public function escribe(Request $Request){
      $this->validate($Request,[
        'nombre'=>'required|min:3 |max:50',
        'email'=>'required |email',
        'msj'=>'required|max:225 |min:15',
         ]);
      return $Request->all();
     }
     public function escribir(Request $Request){
      $this->validate($Request,[
        'nombre'=>'required|min:3 |max:50',
        'apaterno'=>'required|max:40 |min:3',
        'amaterno'=>'required|max:40 |min:3',
        'telefono'=>'required|max:10 |min:10',
        'correo'=>'required |email',
        ]);
      return $Request->all();
     }
     public function comenzar(Request $Request){
      $this->validate($Request,[
        'usuario'=>'required',
        'contraseña'=>'required',
        ]);
      return $Request->all();
     }
     public function panes(Request $Request){
      $this->validate($Request,[
        'nombre'=>'required',
        'precio'=>'required',
        'descripcion'=>'required',
        ]);
      return $Request->all();
     }
      public function pasteles(Request $Request){
      $this->validate($Request,[
        'nombre'=>'required',
        'precio'=>'required',
        'descripcion'=>'required',
        ]);
      return $Request->all();
    }
         /* public function mensajes(){
        if($request->has('nombre')){
          return "El dato nombre es existente";
        }
          return "No hay nombre";
        return $request->all();

     } 
      public function email(){
        if($request->has('email')){
          return "El dato no son correctos";
        }
          return "No hay email";
        return $request->all();

     } 
      public function msj(){
        if($request->has('msj')){
          return "El dato nombre es existente";
        }
          return "No hay mensaje";
        return $request->all();

     }*/ 
   
  }    
    
