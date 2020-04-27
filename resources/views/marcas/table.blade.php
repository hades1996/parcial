<div class="table-responsive-sm">
    <table class="table table-striped" id="marcas-table">
        <thead>
            <tr>
                <th>Marca</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($marcas as $marcas)
            <tr>
                <td>{{ $marcas->marca }}</td>
                <td>
                    {!! Form::open(['route' => ['marcas.destroy', $marcas->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('marcas.show', [$marcas->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('marcas.edit', [$marcas->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>