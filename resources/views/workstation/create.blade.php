@extends('adminlte::page')

@section('template_title')
    Create Workstation
@endsection

@section('content')
    <br><section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Create Workstation</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('workstations.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('workstation.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
