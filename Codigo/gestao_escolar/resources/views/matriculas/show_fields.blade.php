<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $matricula->id !!}</p>
</div>

<!-- Codigo Estudante Field -->
<div class="form-group">
    {!! Form::label('codigo_estudante', 'Codigo Estudante:') !!}
    <p>{!! $matricula->codigo_estudante !!}</p>
</div>

<!-- Data Matricula Field -->
<div class="form-group">
    {!! Form::label('data_matricula', 'Data Matricula:') !!}
    <p>{!! $matricula->data_matricula !!}</p>
</div>

<!-- Estado Field -->
<div class="form-group">
    {!! Form::label('estado', 'Estado:') !!}
    <p>{!! $matricula->estado !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $matricula->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $matricula->updated_at !!}</p>
</div>

