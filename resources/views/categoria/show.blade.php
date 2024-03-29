@extends('layouts.app')

@section('template_title')
    {{ $categoria->name ?? __('Ver') . " " . __('Categoria') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Ver') }} Categoria</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('categorias.index') }}"> {{ __('Volver') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                        <div class="form-group mb-2 mb20">
                            <strong>Id:</strong>
                            {{ $categoria->cat_id }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Nombre Categoria:</strong>
                            {{ $categoria->cat_nombre }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
