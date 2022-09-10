@extends('adminlte::page')

@section('template_title')
    {{ $appointment->name ?? 'Show Appointment' }}
@endsection

@section('content')
    <br><section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Appointment</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('appointments.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Office Id:</strong>
                            {{ $appointment->office_id }}
                        </div>
                        <div class="form-group">
                            <strong>Workshop Id:</strong>
                            {{ $appointment->workshop_id }}
                        </div>
                        <div class="form-group">
                            <strong>Owner Id:</strong>
                            {{ $appointment->owner_id }}
                        </div>
                        <div class="form-group">
                            <strong>Date:</strong>
                            {{ $appointment->date }}
                        </div>
                        <div class="form-group">
                            <strong>Time:</strong>
                            {{ $appointment->time }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
