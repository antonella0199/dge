<div class="card mb-5">
    <form action="{{ $reporte->id ? route('reportes.update', $reporte) : route('reportes.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @if ($reporte->id)
        @method('PUT')
        @endif
        <div class="card-body">
            <div class="mb-3 row">
            <label for="asunto" class="col-sm-4 col-form-label">
                * Asunto
            </label>
            <div class="col-sm-8">
                <input type="text" class="form-control @error('asunto') is-invalid @enderror" id="asunto" name="asunto">{{ old('asunto', optional($reporte)->asunto) }}
                @error('asunto')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            </div>
            <div class="mb-3-row">
            <label for="departamento" class="col-sm-4 col-form-label">
                * Departamento
            </label>
                <select class="form-select-sm" name="departamento" id="departamento">
                <option value="">Salta</option>
                <option value="">San Martin</option>
                <option value="">Guemes</option>
                </select>
            </div><br>
            <div class="mb-3-row">
            <label for="municipio" class="col-sm-4 col-form-label">
                * Municipio
            </label>
                <select class="form-select-sm" name="municipio" id="municipio">
                <option value="">Capital</option>
                <option value="">Cerrillos</option>
                <option value="">Vaqueros</option>
                <option value="">Tartagal</option>
                <option value="">Campo Santo</option>
                <option value="">El Bordo</option>
                
                </select>
            </div><br>
            <div class="mb-3-row">
            <label for="barrio" class="col-sm-4 col-form-label">
                * Barrio
            </label>
                <select class="form-select-sm" name="barrio_id" id="barrio_id">{{old('barrio_id',optional($reporte)->barrio_id)}}
                <option value="1">135 Viviendas</option>
                <option value="2">Mosconi</option>
                </select>
            </div><br>
                        
            <div class="mb-3 row">
            <label for="fechaIni" class="col-sm-4 col-form-label">
                * Fecha de inicio:
            </label>
            <div class="col-sm-2">
                <input type="date" class="form-control @error('fechaIni') is-invalid @enderror" id="fechaIni" name="fechaIni">{{ old('fechaIni', optional($reporte)->fechaIni) }}
                @error('fechaIni')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>
        
        <div class="mb-3 row">
            <label for="descripcion" class="col-sm-4 col-form-label">
                * Descripcion
            </label>
            <div class="col-sm-8">
                <textarea class="form-control @error('descripcion') is-invalid @enderror" id="descripcion" name="descripcion" rows="10">{{ old('descripcion', optional($reporte)->descripcion) }}</textarea>
                @error('descripcion')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>
        <div class="mb-3 row">
            <label for="image" class="col-sm-4 col-form-label">
                * Archivo .jpg (Opcional)
            </label>
            <div class="col-sm-8">
                <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" accept="image/*">
                @error('image')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>
</div>
<div class="card-footer">
    <button type="submit" class="btn btn-success text-uppercase">
        {{ $reporte->id ? 'Actualizar Post' : 'Crear nuevo reporte' }}
    </button>
</div>
</form>
</div>
@push('js')
<script>
    document.addEventListener("DOMContentLoaded", function(event) {
        const image = document.getElementById('image');
        image.addEventListener('change', (e) => {
            const input = e.target;
            const imagePreview = document.querySelector('#image_preview');
            if (!input.files.length) return
            file = input.files[0];
            objectURL = URL.createObjectURL(file);
            imagePreview.src = objectURL;
        });
    });

</script>
@endpush