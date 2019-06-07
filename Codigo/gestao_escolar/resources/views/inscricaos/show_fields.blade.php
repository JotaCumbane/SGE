<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $inscricao->id !!}</p>
</div>

<!-- Codigo Estudante Field -->
<div class="form-group">
    {!! Form::label('codigo_estudante', 'Codigo Estudante:') !!}
    <p>{!! $inscricao->codigo_estudante !!}</p>
</div>

<!-- Disciplina Field -->
<div class="form-group">
    {!! Form::label('disciplina', 'Disciplina:') !!}
    <p>{!! $inscricao->disciplina !!}</p>
</div>

<!-- Data Inscricao Field -->
<div class="form-group">
    {!! Form::label('data_inscricao', 'Data Inscricao:') !!}
    <p>{!! $inscricao->data_inscricao !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $inscricao->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $inscricao->updated_at !!}</p>
</div>

