<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $modelos->id }}</p>
</div>

<!-- Tipo Modelo Field -->
<div class="form-group">
    {!! Form::label('tipo_modelo', 'Tipo Modelo:') !!}
    <p>{{ $modelos->tipo_modelo }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $modelos->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $modelos->updated_at }}</p>
</div>

