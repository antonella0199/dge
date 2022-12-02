<?php

namespace App\Http\Controllers;

use App\Models\Establecimiento;
use App\Http\Requests\StoreEstablecimientoRequest;
use App\Http\Requests\UpdateEstablecimientoRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Contracts\Role;
use Yajra\DataTables\DataTables;

class EstablecimientoController extends Controller
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
            $data = DB::select("SELECT e.id, d.nombre as nameD, m.nombre as nameM, b.nombre as nameB, e.nombre as nameE FROM establecimientos as e INNER JOIN barrios as b on b.id = e.barrio_id INNER JOIN municipios as m on b.municipio_id = m.id INNER JOIN departamentos d on d.id = m.departamento_id;");
           
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
        return view('panel.admin.lista_establecimientos.index');
        
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
     * @param  \App\Http\Requests\StoreEstablecimientoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $establecimiento = new Establecimiento();

        $establecimiento->tipoEst_id = $request->tipoEst_id;
        $establecimiento->barrio_id = $request->barrio_id;
        $establecimiento->nombre = $request->nombre;
        $establecimiento->numero = $request->numero;
        $establecimiento->direccion = $request->direccion;
        $establecimiento->horarios= $request->horarios;
        $establecimiento->telefono = $request->telefono;
        $establecimiento->descripcion = $request->descripcion;

        $success = $establecimiento->save();

        //$establecimiento->created($request->all());
        /* Establecimiento::updateOrCreate(['tipoEst_id' => $request->tipoEst_id],
        ['barrio_id' => $request->barrio_id],
        ['nombre' => $request->nombre],
        ['numero' => $request->numero],
        ['direccion' => $request->direccion],
        ['horarios' => $request->horarios],
        ['telefono' => $request->telefono],
        ['descripcion' => $request->descripcion]);    */

        return response()->json(['success' => $success]);
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Establecimiento  $establecimiento
     * @return \Illuminate\Http\Response
     */
    public function show(Establecimiento $establecimiento)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Establecimiento  $establecimiento
     * @return \Illuminate\Http\Response
     */
    public function edit(Establecimiento $establecimiento)
    {
       
        $establecimiento = Establecimiento::find($establecimiento->id);
        return response()->json($establecimiento);
    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateEstablecimientoRequest  $request
     * @param  \App\Models\Establecimiento  $establecimiento
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEstablecimientoRequest $request, Establecimiento $establecimiento)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Establecimiento  $establecimiento
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Establecimiento::find($id)->delete();
        return response()->json(['success'=>'Producto borrado con éxito.']);
    }
}
