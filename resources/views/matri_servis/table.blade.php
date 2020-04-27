<div class="table-responsive-sm">
    <table class="table table-striped" id="matriServis-table">
        <thead>
            <tr>
                <th>Matricula</th>
        <th>Servicio</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($matriServis as $matriServi)
            <tr>
                <td>{{ $matriServi->matricula }}</td>
            <td>{{ $matriServi->servicio }}</td>
                <td>
                    {!! Form::open(['route' => ['matriServis.destroy', $matriServi->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('matriServis.show', [$matriServi->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('matriServis.edit', [$matriServi->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>