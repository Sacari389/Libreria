<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <!--div class="form-group mb-2 mb20">
            <label for="cat_id" class="form-label">{{ __('Id') }}</label>
            <input type="text" name="cat_id" class="form-control @error('cat_id') is-invalid @enderror" value="{{ old('cat_id', $categoria?->cat_id) }}" id="cat_id" placeholder="Cat Id">
            {!! $errors->first('cat_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div-->
        <div class="form-group mb-2 mb20">
            <label for="cat_nombre" class="form-label">{{ __('Nombre') }}</label>
            <input type="text" name="cat_nombre" class="form-control @error('cat_nombre') is-invalid @enderror" value="{{ old('cat_nombre', $categoria?->cat_nombre) }}" id="cat_nombre" placeholder="Nombre">
            {!! $errors->first('cat_nombre', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Crear') }}</button>
    </div>
</div>