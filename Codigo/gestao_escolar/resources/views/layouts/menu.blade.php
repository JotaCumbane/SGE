<li class="{{ Request::is('disciplinas*') ? 'active' : '' }}">
    <a href="{!! route('disciplinas.index') !!}"><i class="fa fa-edit"></i><span>Disciplinas</span></a>
</li>

<li class="{{ Request::is('funcionarios*') ? 'active' : '' }}">
    <a href="{!! route('funcionarios.index') !!}"><i class="fa fa-edit"></i><span>Funcionarios</span></a>
</li>

<li class="{{ Request::is('professors*') ? 'active' : '' }}">
    <a href="{!! route('professors.index') !!}"><i class="fa fa-edit"></i><span>Professores</span></a>
</li>

<li class="{{ Request::is('estudantes*') ? 'active' : '' }}">
    <a href="{!! route('estudantes.index') !!}"><i class="fa fa-edit"></i><span>Estudantes</span></a>
</li>

<li class="{{ Request::is('matriculas*') ? 'active' : '' }}">
    <a href="{!! route('matriculas.index') !!}"><i class="fa fa-edit"></i><span>Matriculas</span></a>
</li>

<li class="{{ Request::is('inscricaos*') ? 'active' : '' }}">
    <a href="{!! route('inscricaos.index') !!}"><i class="fa fa-edit"></i><span>Inscricoes</span></a>
</li>

