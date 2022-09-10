<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('name') }}
            {{ Form::text('name', $workshop->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Name']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('address') }}
            {{ Form::text('address', $workshop->address, ['class' => 'form-control' . ($errors->has('address') ? ' is-invalid' : ''), 'placeholder' => 'Address']) }}
            {!! $errors->first('address', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cost_center') }}
            {{ Form::text('cost_center', $workshop->cost_center, ['class' => 'form-control' . ($errors->has('cost_center') ? ' is-invalid' : ''), 'placeholder' => 'Cost Center']) }}
            {!! $errors->first('cost_center', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('workstation_id') }}
            {{ Form::select('workstation_id', $workstations, $workshop->workstation_id, ['class' => 'form-control' . ($errors->has('workstation_id') ? ' is-invalid' : ''), 'placeholder' => 'Seleccionar']) }}
            {!! $errors->first('workstation_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>