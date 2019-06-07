<div class="table-responsive">
    <table class="table" id="professors-table">
        <thead>
            <tr>
                <th>Codigo</th>
        <th>Nome</th>
        <th>Sexo</th>
        <th>Data Nascimento</th>
        <th>Formacao</th>
        <th>Telefone</th>
        <th>Morada</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($professors as $professor)
            <tr>
                <td>{!! $professor->codigo !!}</td>
            <td>{!! $professor->nome !!}</td>
            <td>{!! $professor->sexo !!}</td>
            <td>{!! $professor->data_nascimento !!}</td>
            <td>{!! $professor->formacao !!}</td>
            <td>{!! $professor->telefone !!}</td>
            <td>{!! $professor->morada !!}</td>
                <td>
                    {!! Form::open(['route' => ['professors.destroy', $professor->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('professors.show', [$professor->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('professors.edit', [$professor->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
