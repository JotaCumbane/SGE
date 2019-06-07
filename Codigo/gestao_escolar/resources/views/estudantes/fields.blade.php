<!-- Codigo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('codigo', 'Codigo:') !!}
    {!! Form::number('codigo', null, ['class' => 'form-control']) !!}
</div>

<!-- Nome Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nome', 'Nome:') !!}
    {!! Form::text('nome', null, ['class' => 'form-control']) !!}
</div>

<!-- Genero Field -->
<div class="form-group col-sm-6">
    {!! Form::label('genero', 'Genero:') !!}
    {!! Form::text('genero', null, ['class' => 'form-control']) !!}
</div>

<!-- Data Nascimento Field -->
<div class="form-group col-sm-6">
    {!! Form::label('data_nascimento', 'Data Nascimento:') !!}
    {!! Form::date('data_nascimento', null, ['class' => 'form-control','id'=>'data_nascimento']) !!}
</div>

@section('scripts')
    <script type="text/javascript">
        $('#data_nascimento').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
@endsection

<!-- Nome Encarregado Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nome_encarregado', 'Nome Encarregado:') !!}
    {!! Form::text('nome_encarregado', null, ['class' => 'form-control']) !!}
</div>

<!-- Telefone Field -->
<div class="form-group col-sm-6">
    {!! Form::label('telefone', 'Telefone:') !!}
    {!! Form::number('telefone', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('estudantes.index') !!}" class="btn btn-default">Cancel</a>
</div>
