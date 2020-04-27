<!-- Tipo Modelo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tipo_modelo', 'Tipo Modelo:') !!}
    {!! Form::text('tipo_modelo', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('modelos.index') }}" class="btn btn-secondary">Cancel</a>
</div>
