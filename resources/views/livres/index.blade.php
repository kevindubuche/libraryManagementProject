@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1 class="pull-left">Livres</h1>
        {{-- Bouton PDF --}}
                <button type="button" class="btn btn-sm btn-success"><i class="fa fa-file-excel-o" style="color:white"></i> 
                    <a href="{{route('livrescsv')}}" style="color:white">CSV</a>
                </button>
        {{-- Fin Bouton PDF --}}
        <h1 class="pull-right">
           <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{{ route('livres.create') }}"> Ajouter</a>
        </h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                    @include('livres.table')
            </div>
        </div>
        <div class="text-center">
        
        </div>
    </div>
@endsection

