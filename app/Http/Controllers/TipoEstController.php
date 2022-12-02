<?php

namespace App\Http\Controllers;

use App\Models\TipoEst;
use App\Http\Requests\StoreTipoEstRequest;
use App\Http\Requests\UpdateTipoEstRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\DataTables;

class TipoEstController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreTipoEstRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTipoEstRequest $request)
    {
        //
    }

    public function getTipo(Request $request) {
        if ($request->ajax()) {
            try {    
                $departamentos = TipoEst::all();
                $response = ['data' => $departamentos];
            } catch (\Exception $exception) {
                return response()->json([ 'message' => 'There was an error retrieving the records' ], 500);
            }
            return response()->json($response);
        }
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TipoEst  $tipoEst
     * @return \Illuminate\Http\Response
     */
    public function show(TipoEst $tipoEst)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TipoEst  $tipoEst
     * @return \Illuminate\Http\Response
     */
    public function edit(TipoEst $tipoEst)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTipoEstRequest  $request
     * @param  \App\Models\TipoEst  $tipoEst
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTipoEstRequest $request, TipoEst $tipoEst)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TipoEst  $tipoEst
     * @return \Illuminate\Http\Response
     */
    public function destroy(TipoEst $tipoEst)
    {
        //
    }
}
