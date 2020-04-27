<div class="table-responsive-sm">
    <table class="table table-striped" id="matriculas-table">
        <thead>
            <tr>
                <th>Matricula</th>
        <th>Cc Dueño</th>
        <th>Marca</th>
        <th>Modelo</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($matriculas as $matriculas)
            <tr>
                <td>{{ $matriculas->matricula }}</td>
            <td>{{ $matriculas->cc_dueño }}</td>
            <td>{{ $matriculas->marca }}</td>
            <td>{{ $matriculas->modelo }}</td>
                <td>
                    {!! Form::open(['route' => ['matriculas.destroy', $matriculas->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('matriculas.show', [$matriculas->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('matriculas.edit', [$matriculas->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>