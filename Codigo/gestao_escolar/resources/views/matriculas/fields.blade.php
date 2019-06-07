<!-- Codigo Estudante Field -->
<div class="form-group col-sm-6">
    {!! Form::label('codigo_estudante', 'Codigo Estudante:') !!}
    {!! Form::number('codigo_estudante', null, ['class' => 'form-control']) !!}
</div>

<!-- Data Matricula Field -->
<div class="form-group col-sm-6">
    {!! Form::label('data_matricula', 'Data Matricula:') !!}
    {!! Form::date('data_matricula', null, ['class' => 'form-control','id'=>'data_matricula']) !!}
</div>

@section('scripts')
    <script type="text/javascript">
        $('#data_matricula').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
@endsection

<!-- Estado Field -->
<div class="form-group col-sm-6">
    {!! Form::label('estado', 'Estado:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('estado', 0) !!}
        {!! Form::checkbox('estado', '1', null) !!} 1
    </label>
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('matriculas.index') !!}" class="btn btn-default">Cancel</a>
</div>
