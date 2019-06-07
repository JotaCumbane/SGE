@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Estudante
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($estudante, ['route' => ['estudantes.update', $estudante->id], 'method' => 'patch']) !!}

                        @include('estudantes.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection