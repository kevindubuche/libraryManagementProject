@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Livre
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($livre, ['route' => ['livres.update', $livre->id], 'method' => 'patch']) !!}

                        @include('livres.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection