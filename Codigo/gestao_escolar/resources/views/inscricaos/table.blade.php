<div class="table-responsive">
    <table class="table" id="inscricaos-table">
        <thead>
            <tr>
                <th>Codigo Estudante</th>
        <th>Disciplina</th>
        <th>Data Inscricao</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($inscricaos as $inscricao)
            <tr>
                <td>{!! $inscricao->codigo_estudante !!}</td>
            <td>{!! $inscricao->disciplina !!}</td>
            <td>{!! $inscricao->data_inscricao !!}</td>
                <td>
                    {!! Form::open(['route' => ['inscricaos.destroy', $inscricao->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('inscricaos.show', [$inscricao->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('inscricaos.edit', [$inscricao->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
