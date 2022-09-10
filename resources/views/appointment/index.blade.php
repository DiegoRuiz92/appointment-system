@extends('adminlte::page')

@section('template_title')
    Appointment
@endsection

@section('content')
    <br><div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Appointment') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('appointments.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Office Id</th>
										<th>Workshop Id</th>
										<th>Owner Id</th>
										<th>Date</th>
										<th>Time</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($appointments as $appointment)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $appointment->office->name }}</td>
											<td>{{ $appointment->workshop->name }}</td>
											<td>{{ $appointment->owner->document }}</td>
											<td>{{ $appointment->date }}</td>
											<td>{{ $appointment->time }}</td>

                                            <td>
                                                <form action="{{ route('appointments.destroy',$appointment->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('appointments.show',$appointment->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('appointments.edit',$appointment->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $appointments->links() !!}
            </div>
        </div>
    </div>
@endsection
