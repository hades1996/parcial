<!-- Tipo Servicio Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tipo_servicio', 'Tipo Servicio:') !!}
    {!! Form::text('tipo_servicio', null, ['class' => 'form-control']) !!}
</div>

<!-- Valor Field -->
<div class="form-group col-sm-6">
    {!! Form::label('valor', 'Valor:') !!}
    {!! Form::number('valor', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('servicios.index') }}" class="btn btn-secondary">Cancel</a>
</div>
