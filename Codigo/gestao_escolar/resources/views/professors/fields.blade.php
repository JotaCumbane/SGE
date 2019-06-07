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

<!-- Sexo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('sexo', 'Sexo:') !!}
    {!! Form::text('sexo', null, ['class' => 'form-control']) !!}
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

<!-- Formacao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('formacao', 'Formacao:') !!}
    {!! Form::text('formacao', null, ['class' => 'form-control']) !!}
</div>

<!-- Telefone Field -->
<div class="form-group col-sm-6">
    {!! Form::label('telefone', 'Telefone:') !!}
    {!! Form::number('telefone', null, ['class' => 'form-control']) !!}
</div>

<!-- Morada Field -->
<div class="form-group col-sm-6">
    {!! Form::label('morada', 'Morada:') !!}
    {!! Form::text('morada', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('professors.index') !!}" class="btn btn-default">Cancel</a>
</div>
