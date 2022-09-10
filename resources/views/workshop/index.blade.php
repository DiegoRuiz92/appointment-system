@extends('adminlte::page')

@section('template_title')
    Workshop
@endsection

@section('content')
    <br><div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Workshop') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('workshops.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Name</th>
										<th>Address</th>
										<th>Cost Center</th>
										<th>Puesto de trabajo</th>
										<th>Técnico</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($workshops as $workshop)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $workshop->name }}</td>
											<td>{{ $workshop->address }}</td>
											<td>{{ $workshop->cost_center }}</td>
											<td>{{ $workshop->workstation->name }}</td>
											<td>{{ $workshop->workstation->technician }}</td>

                                            <td>
                                                <form action="{{ route('workshops.destroy',$workshop->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('workshops.show',$workshop->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('workshops.edit',$workshop->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $workshops->links() !!}
            </div>
        </div>
    </div>
@endsection
