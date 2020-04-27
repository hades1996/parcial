<div class="table-responsive-sm">
    <table class="table table-striped" id="modelos-table">
        <thead>
            <tr>
                <th>Tipo Modelo</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($modelos as $modelos)
            <tr>
                <td>{{ $modelos->tipo_modelo }}</td>
                <td>
                    {!! Form::open(['route' => ['modelos.destroy', $modelos->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('modelos.show', [$modelos->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('modelos.edit', [$modelos->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>