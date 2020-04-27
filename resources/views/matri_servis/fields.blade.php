<!-- Matricula Field -->
<div class="form-group col-sm-6">
    {!! Form::label('matricula', 'Matricula:') !!}
    {!! Form::number('matricula', null, ['class' => 'form-control']) !!}
</div>

<!-- Servicio Field -->
<div class="form-group col-sm-6">
    {!! Form::label('servicio', 'Servicio:') !!}
    {!! Form::number('servicio', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('matriServis.index') }}" class="btn btn-secondary">Cancel</a>
</div>
