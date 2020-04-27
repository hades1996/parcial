<div class="table-responsive-sm">
    <table class="table table-striped" id="servicios-table">
        <thead>
            <tr>
                <th>Tipo Servicio</th>
        <th>Valor</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($servicios as $servicios)
            <tr>
                <td>{{ $servicios->tipo_servicio }}</td>
            <td>{{ $servicios->valor }}</td>
                <td>
                    {!! Form::open(['route' => ['servicios.destroy', $servicios->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('servicios.show', [$servicios->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('servicios.edit', [$servicios->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>