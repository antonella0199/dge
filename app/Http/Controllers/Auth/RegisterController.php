<?php

namespace App\Http\Controllers\Auth;


use App\Models\Departamento;
use App\Models\Municipio;
use App\Models\Barrio;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function getDepartamento()
    {
        try {    
            $departamentos = Departamento::all();
            $response = ['data' => $departamentos];
        } catch (\Exception $exception) {
        
            return response()->json([ 'message' => 'error' ], 500);
        }
        return response()->json($response);
    }

    public function getMunicipio(Request $request)
    {
        try {    
            $depa_id = $request->input('plant_id');
            $municipios = DB::select("SELECT * FROM municipios WHERE departamento_id = $depa_id");
           
            $response = ['data' => $municipios];
        } catch (\Exception $exception) {
            return response()->json([ 'message' => 'There was an error retrieving the records' ], 500);
        }
        return response()->json($response);
    }

    public function getBarrio(Request $request)
    {
        try {    
            $municipio_id = $request->input('area_id');
            $barrios = Barrio::when($municipio_id, function ($query) use ($municipio_id) {
                $query->where('municipio_id', $municipio_id);
            })->get();
            $response = ['data' => $barrios];
        } catch (\Exception $exception) {
            return response()->json([ 'message' => 'There was an error retrieving the records' ], 500);
        }
        return response()->json($response);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'nombre' => ['required', 'string', 'max:255'],
            'apellido' => ['required', 'string', 'max:255'],
            'dni' => ['required', 'string', 'max:255','unique:users'],
            'direccion' =>['required', 'string', 'max:255'],
            'telefono' =>['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'barrio_id' =>['required']

        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create([
            'barrio_id' => $data['barrio'],
            'nombre' => $data['nombre'],
            'apellido' => $data['apellido'],
            'dni' => $data['dni'],
            'direccion' => $data['direccion'],
            'telefono' => $data['telefono'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'rol' => 'vecino',
        ])->assignRole('vecino');
    }
}
