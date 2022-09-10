@extends('adminlte::page')

@section('template_title')
    Update Owner
@endsection

@section('content')
    <br><section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Update Owner</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('owners.update', $owner->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('owner.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
