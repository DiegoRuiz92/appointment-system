<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('document') }}
            {{ Form::text('document', $owner->document, ['class' => 'form-control' . ($errors->has('document') ? ' is-invalid' : ''), 'placeholder' => 'Document']) }}
            {!! $errors->first('document', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('document_id') }}
            {{ Form::select('document_id', $documents, $owner->document_id, ['class' => 'form-control' . ($errors->has('document_id') ? ' is-invalid' : ''), 'placeholder' => 'Document Id']) }}
            {!! $errors->first('document_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('firstname') }}
            {{ Form::text('firstname', $owner->firstname, ['class' => 'form-control' . ($errors->has('firstname') ? ' is-invalid' : ''), 'placeholder' => 'Firstname']) }}
            {!! $errors->first('firstname', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('middlename') }}
            {{ Form::text('middlename', $owner->middlename, ['class' => 'form-control' . ($errors->has('middlename') ? ' is-invalid' : ''), 'placeholder' => 'Middlename']) }}
            {!! $errors->first('middlename', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('lastname') }}
            {{ Form::text('lastname', $owner->lastname, ['class' => 'form-control' . ($errors->has('lastname') ? ' is-invalid' : ''), 'placeholder' => 'Lastname']) }}
            {!! $errors->first('lastname', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('second_lastname') }}
            {{ Form::text('second_lastname', $owner->second_lastname, ['class' => 'form-control' . ($errors->has('second_lastname') ? ' is-invalid' : ''), 'placeholder' => 'Second Lastname']) }}
            {!! $errors->first('second_lastname', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('mobile') }}
            {{ Form::text('mobile', $owner->mobile, ['class' => 'form-control' . ($errors->has('mobile') ? ' is-invalid' : ''), 'placeholder' => 'Mobile']) }}
            {!! $errors->first('mobile', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('email') }}
            {{ Form::text('email', $owner->email, ['class' => 'form-control' . ($errors->has('email') ? ' is-invalid' : ''), 'placeholder' => 'Email']) }}
            {!! $errors->first('email', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('license') }}
            {{ Form::text('license', $owner->license, ['class' => 'form-control' . ($errors->has('license') ? ' is-invalid' : ''), 'placeholder' => 'License']) }}
            {!! $errors->first('license', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('brand') }}
            {{ Form::text('brand', $owner->brand, ['class' => 'form-control' . ($errors->has('brand') ? ' is-invalid' : ''), 'placeholder' => 'Brand']) }}
            {!! $errors->first('brand', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('line') }}
            {{ Form::text('line', $owner->line, ['class' => 'form-control' . ($errors->has('line') ? ' is-invalid' : ''), 'placeholder' => 'Line']) }}
            {!! $errors->first('line', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('model') }}
            {{ Form::text('model', $owner->model, ['class' => 'form-control' . ($errors->has('model') ? ' is-invalid' : ''), 'placeholder' => 'Model']) }}
            {!! $errors->first('model', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>