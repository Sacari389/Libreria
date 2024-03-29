@extends('layouts.app')

@section('template_title')
    Editoriales
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Editoriales') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('editoriales.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Crear Nuevo') }}
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
										<th>Nombre Editorial</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($editoriales as $editoriale)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $editoriale->edt_id }}</td>
											<td>{{ $editoriale->edt_nombre }}</td>

                                            <td>
                                                <form action="{{ route('editoriales.destroy',$editoriale->edt_id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('editoriales.show',$editoriale->edt_id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Ver') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('editoriales.edit',$editoriale->edt_id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
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
                    </div>
                </div>
                {!! $editoriales->links() !!}
            </div>
        </div>
    </div>
@endsection
