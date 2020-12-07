@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Emprunt
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       @include('flash::message')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($emprunt, ['route' => ['emprunts.update', $emprunt->id], 'method' => 'patch']) !!}

                        @include('emprunts.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection