@extends('layouts.app')

@section('template_title')
    {{ $libro->name ?? __('Ver') . " " . __('Libro') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Ver') }} Libro</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('libros.index') }}"> {{ __('Volver') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                        <div class="form-group mb-2 mb20">
                            <strong>Id:</strong>
                            {{ $libro->lib_id }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Titulo:</strong>
                            {{ $libro->lib_titulo }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Fecha Publicacion:</strong>
                            {{ $libro->lib_fecha_publicacion }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Autor:</strong>
                            {{ $libro->lib_id_autor }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Editorial:</strong>
                            {{ $libro->lib_id_editorial }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Categoria:</strong>
                            {{ $libro->lib_id_categoria }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
