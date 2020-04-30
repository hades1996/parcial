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
        @foreach($matri_servi as $matriServis)
            <tr>
                
            <td>{{ $matriServis->servicio }}</td>
                <td>
                    {!! Form::open(['route' => ['matriServis.destroy', $matriServis->id], 'method' => 'delete']) !!}
                    <input type="hidden" name="macricula" value="{{ ($matriServi->matriculas)}}">
                    <div class='btn-group'>
                        
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>