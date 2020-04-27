<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $servicios->id }}</p>
</div>

<!-- Tipo Servicio Field -->
<div class="form-group">
    {!! Form::label('tipo_servicio', 'Tipo Servicio:') !!}
    <p>{{ $servicios->tipo_servicio }}</p>
</div>

<!-- Valor Field -->
<div class="form-group">
    {!! Form::label('valor', 'Valor:') !!}
    <p>{{ $servicios->valor }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $servicios->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $servicios->updated_at }}</p>
</div>

