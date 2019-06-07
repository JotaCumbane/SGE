<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $funcionario->id !!}</p>
</div>

<!-- Nome Field -->
<div class="form-group">
    {!! Form::label('nome', 'Nome:') !!}
    <p>{!! $funcionario->nome !!}</p>
</div>

<!-- Apelido Field -->
<div class="form-group">
    {!! Form::label('apelido', 'Apelido:') !!}
    <p>{!! $funcionario->apelido !!}</p>
</div>

<!-- Genero Field -->
<div class="form-group">
    {!! Form::label('genero', 'Genero:') !!}
    <p>{!! $funcionario->genero !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $funcionario->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $funcionario->updated_at !!}</p>
</div>

