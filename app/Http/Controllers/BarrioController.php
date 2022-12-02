<?php

namespace App\Http\Controllers;

use App\Models\Barrio;
use App\Http\Requests\StoreBarrioRequest;
use App\Http\Requests\UpdateBarrioRequest;
use App\Models\Departamento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\DataTables;

class BarrioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request-> ajax()){
            //$data = User::select(['id','nombre','apellido','rol','barrio_id'])->role(['vecino', 'representante'])->get(); //latest trae toda la info ordenada, con get traigolos datos de la bd
            $data = DB::select("SELECT b.id, d.nombre as nameD, m.nombre as nameM, b.nombre as nameB FROM barrios as b INNER JOIN municipios as m on b.municipio_id = m.id INNER JOIN departamentos d on d.id = m.departamento_id;");
            
            $user = auth()->user();
            if($user->hasRole('admin')){
                return Datatables::of($data)
                    //->addIndexColumn()
                    
                    ->addColumn('action', function($row){
                        $btn = '<a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Delete" class="btn btn-danger btn-sm deleteBarrio">Borrar</a>';                 
                    return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
            }
            return Datatables::of($data)
                    //->addIndexColumn()
                    
                    ->addColumn('action', function($row){
                        $btn = '<a href="javascript:void(0)" class="btn btn-secondary btn-sm disabled">Borrar</a>';                 
                    return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);

        }
        return view('panel.admin.lista_barrios.index');
    }

    public function getDepartamento(Request $request) {
        if ($request->ajax()) {
            try {    
                $departamentos = Departamento::all();
                $response = ['data' => $departamentos];
            } catch (\Exception $exception) {
                return response()->json([ 'message' => 'There was an error retrieving the records' ], 500);
            }
            return response()->json($response);
        }
    }

    public function getMunicipio(Request $request) {
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
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreBarrioRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        Barrio::updateOrCreate(['municipio_id' => $request->id],
                ['nombre' => $request->nombre]);        
   
        return response()->json();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Barrio  $barrio
     * @return \Illuminate\Http\Response
     */
    public function show(Barrio $barrio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Barrio  $barrio
     * @return \Illuminate\Http\Response
     */
    public function edit(Barrio $barrio)
    {
        $barrio = Barrio::find($barrio->id);
        return response()->json($barrio);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBarrioRequest  $request
     * @param  \App\Models\Barrio  $barrio
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBarrioRequest $request, Barrio $barrio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Barrio  $barrio
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //public function destroy($id)
    
        Barrio::find($id)->delete();
        return response()->json(['success'=>'Producto borrado con éxito.']);
    
    }
}
