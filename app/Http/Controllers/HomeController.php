<?php

namespace App\Http\Controllers;

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
        //$this->middleware('auth')->except(['index', 'store']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = auth()->user();
        if($user->hasRole('admin')){
            return view('panel.admin.inicioAdmin.index');
        }else{
            if($user->hasRole('vecino')){
                return view('panel.vecino.inicioVecino.index');
            }else{
                if($user->hasRole('representante')){
                    return view('panel.representante.inicioRepresentante.index');
                }else{
                    return view('panel.index');
                }
            }
        }
        return view('panel.index');
    }

    public function contact()
    {
        return view('contacto');
    }

    public function info()
    {
        return view('info');
    }

    public function institucion()
    {
        return view('institucion');
    }
    public function ubicacion()
    {
        return view('ubicacion');
    }
    public function productobruto()
    {
        return view('productobruto');
    }

    public function welcome() {
    
        return view('welcome');
    }

}
