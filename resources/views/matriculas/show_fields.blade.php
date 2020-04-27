<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $matriculas->id }}</p>
</div>

<!-- Matricula Field -->
<div class="form-group">
    {!! Form::label('matricula', 'Matricula:') !!}
    <p>{{ $matriculas->matricula }}</p>
</div>

<!-- Cc Dueño Field -->
<div class="form-group">
    {!! Form::label('cc_dueño', 'Cc Dueño:') !!}
    <p>{{ $matriculas->cc_dueño }}</p>
</div>

<!-- Marca Field -->
<div class="form-group">
    {!! Form::label('marca', 'Marca:') !!}
    <p>{{ $matriculas->marca }}</p>
</div>

<!-- Modelo Field -->
<div class="form-group">
    {!! Form::label('modelo', 'Modelo:') !!}
    <p>{{ $matriculas->modelo }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $matriculas->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $matriculas->updated_at }}</p>
</div>

