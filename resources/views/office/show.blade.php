@extends('adminlte::page')

@section('template_title')
    {{ $office->name ?? 'Show Office' }}
@endsection

@section('content')
    <br><section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Office</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('offices.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $office->name }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
