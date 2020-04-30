<!-- Servicio Field -->
<div class="form-group col-sm-6">
    {!! Form::label('servicio', 'Servicio:') !!}
    {!! Form::number('servicio', null, ['class' => 'form-control']) !!}
</div>

{!! Form::hidden('matricula',$id) !!}

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('matriculas.index') }}" class="btn btn-secondary">Cancel</a>
</div>
