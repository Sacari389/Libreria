<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <!--div class="form-group mb-2 mb20">
            <label for="aut_id" class="form-label">{{ __('Id') }}</label>
            <input type="text" name="aut_id" class="form-control @error('aut_id') is-invalid @enderror" value="{{ old('aut_id', $autore?->aut_id) }}" id="aut_id" placeholder="Id">
            {!! $errors->first('aut_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div-->
        <div class="form-group mb-2 mb20">
            <label for="aut_nombre" class="form-label">{{ __('Nombre') }}</label>
            <input type="text" name="aut_nombre" class="form-control @error('aut_nombre') is-invalid @enderror" value="{{ old('aut_nombre', $autore?->aut_nombre) }}" id="aut_nombre" placeholder="Nombre">
            {!! $errors->first('aut_nombre', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>