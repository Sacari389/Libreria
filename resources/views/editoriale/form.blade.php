<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <!--div class="form-group mb-2 mb20">
            <label for="edt_id" class="form-label">{{ __('Id') }}</label>
            <input type="text" name="edt_id" class="form-control @error('id') is-invalid @enderror" value="{{ old('edt_id', $editoriale?->edt_id) }}" id="edt_id" placeholder="Edt Id">
            {!! $errors->first('edt_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div-->
        <div class="form-group mb-2 mb20">
            <label for="edt_nombre" class="form-label">{{ __('Nombre') }}</label>
            <input type="text" name="edt_nombre" class="form-control @error('edt_nombre') is-invalid @enderror" value="{{ old('edt_nombre', $editoriale?->edt_nombre) }}" id="edt_nombre" placeholder="Nombre">
            {!! $errors->first('edt_nombre', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Guardar') }}</button>
    </div>
</div>