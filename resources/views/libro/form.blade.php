<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <!--div class="form-group mb-2 mb20">
            <label for="lib_id" class="form-label">{{ __('Lib Id') }}</label>
            <input type="text" name="lib_id" class="form-control @error('lib_id') is-invalid @enderror" value="{{ old('lib_id', $libro?->lib_id) }}" id="lib_id" placeholder="Lib Id">
            {!! $errors->first('lib_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div-->
        <div class="form-group mb-2 mb20">
            <label for="lib_titulo" class="form-label">{{ __('Titulo Libro') }}</label>
            <input type="text" name="lib_titulo" class="form-control @error('lib_titulo') is-invalid @enderror" value="{{ old('lib_titulo', $libro?->lib_titulo) }}" id="lib_titulo" placeholder="Titulo">
            {!! $errors->first('lib_titulo', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="lib_fecha_publicacion" class="form-label">{{ __('Fecha Publicacion') }}</label>
            <input type="date" name="lib_fecha_publicacion" class="form-control @error('lib_fecha_publicacion') is-invalid @enderror" value="{{ old('lib_fecha_publicacion', $libro?->lib_fecha_publicacion) }}" id="lib_fecha_publicacion" placeholder="Fecha Publicacion">
            {!! $errors->first('lib_fecha_publicacion', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>        
        <div class="form-group mb-2 mb20">
            <label for="lib_id_autor" class="form-label">{{ __('Autor') }}</label>
            <select name="lib_id_autor" class="form-control @error('lib_id_autor') is-invalid @enderror" id="lib_id_autor" placeholder="Autor">
                <option value="" selected>{{ __('Seleccionar autor') }}</option> <!-- Opción por defecto -->
                @foreach($autore as $aut_id => $aut_nombre)
                    <option value="{{ $aut_id }}" {{ old('lib_id_autor', $libro->lib_id_autor) == $aut_id ? 'selected' : '' }}>{{ $aut_nombre }}</option>
                @endforeach
            </select>
            {!! $errors->first('lib_id_autor', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        
        <div class="form-group mb-2 mb20">
            <label for="lib_id_editorial" class="form-label">{{ __('Editorial') }}</label>
            <select name="lib_id_editorial" class="form-control @error('lib_id_editorial') is-invalid @enderror" id="lib_id_editorial" placeholder="Editorial">
                <option value="" selected>{{ __('Seleccionar editorial') }}</option> <!-- Opción por defecto -->
                @foreach($editoriale as $edt_id => $edt_nombre)
                    <option value="{{ $edt_id }}" {{ old('lib_id_editorial', $libro->lib_id_editorial) == $edt_id ? 'selected' : '' }}>{{ $edt_nombre }}</option>
                @endforeach
            </select>
            {!! $errors->first('lib_id_editorial', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        
        <div class="form-group mb-2 mb20">
            <label for="lib_id_categoria" class="form-label">{{ __('Categoria') }}</label>
            <select name="lib_id_categoria" class="form-control @error('lib_id_categoria') is-invalid @enderror" id="lib_id_categoria" placeholder="Categoria">
                <option value="" selected>{{ __('Seleccionar categoría') }}</option> <!-- Opción por defecto -->
                @foreach($categoria as $cat_id => $cat_nombre)
                    <option value="{{ $cat_id }}" {{ old('lib_id_categoria', $libro->lib_id_categoria) == $cat_id ? 'selected' : '' }}>{{ $cat_nombre }}</option>
                @endforeach
            </select>
            {!! $errors->first('lib_id_categoria', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        
        
        

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Guardar') }}</button>
    </div>
</div>