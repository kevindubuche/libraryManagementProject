@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Emprunt
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('emprunts.show_fields')
                    <a href="{{ route('emprunts.index') }}" class="btn btn-default">Retour</a>
                </div>
            </div>
        </div>
    </div>
@endsection
