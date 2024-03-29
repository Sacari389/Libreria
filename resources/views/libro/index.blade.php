@extends('layouts.app')

@section('template_title')
    Libros
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Libros') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('libros.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Crear Libro') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success m-4">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body bg-white">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Id</th>
										<th>Titulo Libro</th>
										<th>Fecha Publicacion</th>
										<th>Autor</th>
										<th>Editorial</th>
										<th>Categoria</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($libros as $libro)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $libro->lib_id }}</td>
											<td>{{ $libro->lib_titulo }}</td>
											<td>{{ $libro->lib_fecha_publicacion }}</td>
											<td>{{ $libro->lib_id_autor }}</td>
											<td>{{ $libro->lib_id_editorial }}</td>
											<td>{{ $libro->lib_id_categoria }}</td>

                                            <td>
                                                <form action="{{ route('libros.destroy',$libro->lib_id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('libros.show',$libro->lib_id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Ver') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('libros.edit',$libro->lib_id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Eliminar') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="float-right">
                            <a href="{{ route('libros.export') }}" class="btn btn-success btn-sm float-right">
                                {{ __('Exportar a Excel') }}
                            </a>
                        </div>   
                    </div>
                    
                </div>
                
                {!! $libros->links() !!}
            </div>
        </div>
    </div>
    
@endsection
