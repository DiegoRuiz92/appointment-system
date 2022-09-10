@extends('adminlte::page')

@section('template_title')
    {{ $workshop->name ?? 'Show Workshop' }}
@endsection

@section('content')
    <br><section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Workshop</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('workshops.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $workshop->name }}
                        </div>
                        <div class="form-group">
                            <strong>Address:</strong>
                            {{ $workshop->address }}
                        </div>
                        <div class="form-group">
                            <strong>Cost Center:</strong>
                            {{ $workshop->cost_center }}
                        </div>
                        <div class="form-group">
                            <strong>Workstation Id:</strong>
                            {{ $workshop->workstation_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
