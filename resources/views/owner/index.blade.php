@extends('adminlte::page')

@section('template_title')
    Datos de Propietario y Vehículo
@endsection

@section('content')
    <br><div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Owner') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('owners.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Documento</th>
										{{-- <th>Document Id</th> --}}
										<th>Nombre</th>
										<th>Segundo Nombre</th>
										<th>Primer Apellido</th>
										<th>Segundo Apellido</th>
										<th>Celular</th>
										<th>Email</th>
										<th>Placa de Vehículo</th>
										<th>Marca</th>
										<th>Línea</th>
										<th>Modelo</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($owners as $owner)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $owner->document }}</td>
											{{-- <td>{{ $owner->document_id }}</td> --}}
											<td>{{ $owner->firstname }}</td>
											<td>{{ $owner->middlename }}</td>
											<td>{{ $owner->lastname }}</td>
											<td>{{ $owner->second_lastname }}</td>
											<td>{{ $owner->mobile }}</td>
											<td>{{ $owner->email }}</td>
											<td>{{ $owner->license }}</td>
											<td>{{ $owner->brand }}</td>
											<td>{{ $owner->line }}</td>
											<td>{{ $owner->model }}</td>

                                            <td>
                                                <form action="{{ route('owners.destroy',$owner->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('owners.show',$owner->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('owners.edit',$owner->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $owners->links() !!}
            </div>
        </div>
    </div>
@endsection
