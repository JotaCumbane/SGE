<!-- Codigo Estudante Field -->
<div class="form-group col-sm-6">
    {!! Form::label('codigo_estudante', 'Codigo Estudante:') !!}
    {!! Form::number('codigo_estudante', null, ['class' => 'form-control']) !!}
</div>

<!-- Disciplina Field -->
<div class="form-group col-sm-6">
    {!! Form::label('disciplina', 'Disciplina:') !!}
    {!! Form::text('disciplina', null, ['class' => 'form-control']) !!}
</div>

<!-- Data Inscricao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('data_inscricao', 'Data Inscricao:') !!}
    {!! Form::date('data_inscricao', null, ['class' => 'form-control','id'=>'data_inscricao']) !!}
</div>

@section('scripts')
    <script type="text/javascript">
        $('#data_inscricao').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
@endsection

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('inscricaos.index') !!}" class="btn btn-default">Cancel</a>
</div>
