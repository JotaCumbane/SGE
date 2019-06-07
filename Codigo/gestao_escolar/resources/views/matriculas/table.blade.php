<div class="table-responsive">
    <table class="table" id="matriculas-table">
        <thead>
            <tr>
                <th>Codigo Estudante</th>
        <th>Data Matricula</th>
        <th>Estado</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($matriculas as $matricula)
            <tr>
                <td>{!! $matricula->codigo_estudante !!}</td>
            <td>{!! $matricula->data_matricula !!}</td>
            <td>{!! $matricula->estado !!}</td>
                <td>
                    {!! Form::open(['route' => ['matriculas.destroy', $matricula->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('matriculas.show', [$matricula->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('matriculas.edit', [$matricula->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
