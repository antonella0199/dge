<?php

namespace App\Http\Controllers;


use App\Models\Reporte;
use App\Http\Requests\StoreReporteRequest;
use App\Http\Requests\UpdateReporteRequest;
use App\Mail\reporteMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use App\Exports\ReporteExports;
use Maatwebsite\Excel\Facades\Excel;
use Barryvdh\DomPDF\PDF;

class ReporteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $reportes = Reporte::with('user')->latest()->paginate(10);
        return view('reportes.index', compact('reportes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('reportes.create',['reporte'=> new Reporte]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreReporteRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreReporteRequest $request)
    {
        if($request->hasFile('image')) {
            //Subir imagen al servidor
            $imagen_url = $request->file('image')->store('public/reportes');
            //Guardamos la imagen en el servidor
            $request->merge(['imagen_url'=> Storage::url($imagen_url)]);
        }

        $request->merge(['user_id' => auth()->user()->id]);
        $reporte = Reporte::create($request->all());
        foreach(['administrador@gmail.com'] as $recipient){
            Mail::to($recipient)->send(new reporteMail($recipient));

        }
        return redirect()->route('reportes.index')-> with ('alert','Su reporte "'.$reporte->asunto.'" se agregó exitosamente.');
    }



    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Reporte  $reporte
     * @return \Illuminate\Http\Response
     */
    public function show(Reporte $reporte)
    {
        $reporte->load('user');
        return view('reportes.show', compact('reporte'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Reporte  $reporte
     * @return \Illuminate\Http\Response
     */
    public function edit(Reporte $reporte)
    {
        $reporte->load('user');
        return view('reportes.edit', compact('reporte'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateReporteRequest  $request
     * @param  \App\Models\Reporte  $reporte
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateReporteRequest $request, Reporte $reporte)
    {
        if ($request->hasFile('image')) {
            // Eliminamos la imagen anterior
            Storage::delete(str_replace('storage', 'public', $reporte->imagen_url));
            // Subida de la nueva imagen al servidor
            $imagen_url = $request->file('image')->store('public/reportes');
            // Actualización de la ruta de la nueva imagen en la BD
            $request->merge(['imagen_url' => Storage::url($imagen_url)]);
            }
            $reporte->update($request->all());
            return redirect()->route('reportes.index')->with('alert', 'Reporte actualizado exitosamente.');
            
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Reporte  $reporte
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reporte $reporte)
    {
        Storage::delete(str_replace('storage', 'public', $reporte->imagen_url));
        $reporte->delete();
        return redirect()->route('reportes.index')->with('alert', 'Reporte eliminado exitosamente.');

    }

    public function export(){
        return Excel::download(new ReporteExports ,'reportes.xlsx');
    }

    public function downloadPDF() {
        $reportes = Reporte::all();
        view()->share('reportes/exportReportes', $reportes);

        $pdf = \PDF ::loadView('reportes/exportReportes', ['reportes'=>$reportes]);

        return $pdf -> download('reportes.pdf');
    }
}
