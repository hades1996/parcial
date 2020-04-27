<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $marcas->id }}</p>
</div>

<!-- Marca Field -->
<div class="form-group">
    {!! Form::label('marca', 'Marca:') !!}
    <p>{{ $marcas->marca }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $marcas->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $marcas->updated_at }}</p>
</div>

