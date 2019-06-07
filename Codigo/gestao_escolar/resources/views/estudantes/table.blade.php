<div class="table-responsive">
    <table class="table" id="estudantes-table">
        <thead>
            <tr>
                <th>Codigo</th>
        <th>Nome</th>
        <th>Genero</th>
        <th>Data Nascimento</th>
        <th>Nome Encarregado</th>
        <th>Telefone</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($estudantes as $estudante)
            <tr>
                <td>{!! $estudante->codigo !!}</td>
            <td>{!! $estudante->nome !!}</td>
            <td>{!! $estudante->genero !!}</td>
            <td>{!! $estudante->data_nascimento !!}</td>
            <td>{!! $estudante->nome_encarregado !!}</td>
            <td>{!! $estudante->telefone !!}</td>
                <td>
                    {!! Form::open(['route' => ['estudantes.destroy', $estudante->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('estudantes.show', [$estudante->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('estudantes.edit', [$estudante->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
