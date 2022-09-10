<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('office_id') }}
            {{ Form::select('office_id',$offices, $appointment->office_id, ['class' => 'form-control' . ($errors->has('office_id') ? ' is-invalid' : ''), 'placeholder' => 'Office Id']) }}
            {!! $errors->first('office_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('workshop_id') }}
            {{ Form::select('workshop_id',$workshops, $appointment->workshop_id, ['class' => 'form-control' . ($errors->has('workshop_id') ? ' is-invalid' : ''), 'placeholder' => 'Workshop Id']) }}
            {!! $errors->first('workshop_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('owner_id') }}
            {{ Form::select('owner_id',$owners, $appointment->owner_id, ['class' => 'form-control' . ($errors->has('owner_id') ? ' is-invalid' : ''), 'placeholder' => 'Owner Id']) }}
            {!! $errors->first('owner_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('date') }}
            {{ Form::date('date', $appointment->date, ['class' => 'form-control' . ($errors->has('date') ? ' is-invalid' : ''), 'placeholder' => 'Date']) }}
            {!! $errors->first('date', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('time') }}
            {{ Form::time('time', $appointment->time, ['class' => 'form-control' . ($errors->has('time') ? ' is-invalid' : ''), 'placeholder' => 'Time']) }}
            {!! $errors->first('time', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>