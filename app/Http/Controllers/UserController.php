<?php

namespace App\Http\Controllers;

use App\Models\Barrio;
use App\Models\User;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use Yajra\DataTables\DataTables;

class UserController extends Controller
{
    //
    public function index(Request $request){
        if($request-> ajax()){
            //$data = User::select(['id','nombre','apellido','rol','barrio_id'])->role(['vecino', 'representante'])->get(); //latest trae toda la info ordenada, con get traigolos datos de la bd
            $data = DB::select("SELECT u.id, u.nombre as nameU, u.apellido, u.rol, b.nombre as nameB FROM users as u INNER JOIN barrios as b on u.barrio_id = b.id where u.rol = 'vecino' or u.rol = 'representante';");
            
            return Datatables::of($data)
                //->addIndexColumn()
                
                ->addColumn('action', function($row){
                    $btn = '<a href=javascript:void(0)" data-toggle="tooltip" data-id="'.$row->id.'" data-original-title="Edit" class="edit btn btn-primary btn-sm editUser">Editar Rol</a>';       
                    //$btn = $btn.'  <a href=javascript:void(0)" data-toggle="tooltip" data-id="'.$row->id.'" data-original-title="Delete" class="edit btn btn-danger btn-sm verPerfilUser">Ver Perfil</a>';             
                return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);

        }
        return view('panel.admin.lista_usuarios.index');
    }
    /*
    public function get_users() {
        // Todos los usuarios cargados en la BD
        //$users = User::all();
        // Info de usuarios que tengan asignado algunos de los roles pasados por el array
        $users = User::role(['vecino', 'representante'])->get();
        // Info de usuarios acompañados con la info de su rol
        //$users = User::with('roles')->get();
        return response()->json($users);
    }*/

    

    public function store(Request $request){
        $user = User::findOrFail($request->id_usuario);
        $user->rol = $request->rol;
        $user->assignRole($request->rol);
        $user->save();
        //User::updateOrCreate(['id'=>$request->id],['rol'=>$request->rol]);
        return response()->json();
    }

    public function edit($id){
        $user = User::find($id);
        return response()->json($user);
    }
}
