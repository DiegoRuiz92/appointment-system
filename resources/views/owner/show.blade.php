@extends('adminlte::page')

@section('template_title')
    {{ $owner->name ?? 'Show Owner' }}
@endsection

@section('content')
    <br><section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Owner</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('owners.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Document:</strong>
                            {{ $owner->document }}
                        </div>
                        <div class="form-group">
                            <strong>Document Id:</strong>
                            {{ $owner->document_id }}
                        </div>
                        <div class="form-group">
                            <strong>Firstname:</strong>
                            {{ $owner->firstname }}
                        </div>
                        <div class="form-group">
                            <strong>Middlename:</strong>
                            {{ $owner->middlename }}
                        </div>
                        <div class="form-group">
                            <strong>Lastname:</strong>
                            {{ $owner->lastname }}
                        </div>
                        <div class="form-group">
                            <strong>Second Lastname:</strong>
                            {{ $owner->second_lastname }}
                        </div>
                        <div class="form-group">
                            <strong>Mobile:</strong>
                            {{ $owner->mobile }}
                        </div>
                        <div class="form-group">
                            <strong>Email:</strong>
                            {{ $owner->email }}
                        </div>
                        <div class="form-group">
                            <strong>License:</strong>
                            {{ $owner->license }}
                        </div>
                        <div class="form-group">
                            <strong>Brand:</strong>
                            {{ $owner->brand }}
                        </div>
                        <div class="form-group">
                            <strong>Line:</strong>
                            {{ $owner->line }}
                        </div>
                        <div class="form-group">
                            <strong>Model:</strong>
                            {{ $owner->model }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
