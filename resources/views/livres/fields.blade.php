<!-- Position Dans La Bibliotheque Field -->
<div class="form-group col-sm-6">
    {!! Form::label('position_dans_la_bibliotheque', 'Position Dans La Bibliotheque:') !!}
    {!! Form::text('position_dans_la_bibliotheque', null, ['class' => 'form-control','maxlength' => 45,'maxlength' => 45]) !!}
</div>

<!-- Titre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('titre', 'Titre:') !!}
    {!! Form::text('titre', null, ['class' => 'form-control','maxlength' => 45,'maxlength' => 45]) !!}
</div>

<!-- Annee De Parution Field -->
<div class="form-group col-sm-6">
    {!! Form::label('annee_de_parution', 'Annee De Parution:') !!}
    {!! Form::text('annee_de_parution', null, ['class' => 'form-control','id'=>'annee_de_parution']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#annee_de_parution').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Auteur Field -->
<div class="form-group col-sm-6">
    {!! Form::label('auteur', 'Auteur:') !!}
    {!! Form::text('auteur', null, ['class' => 'form-control','maxlength' => 45,'maxlength' => 45]) !!}
</div>

<!-- Statut Field -->
<div class="form-group col-sm-6">
    {!! Form::label('statut', 'Statut:') !!}
    {!! Form::text('statut', null, ['class' => 'form-control','maxlength' => 45,'maxlength' => 45]) !!}
</div>

<!-- Etat Field -->
<div class="form-group col-sm-6">
    {!! Form::label('etat', 'Etat:') !!}
    {!! Form::number('etat', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('livres.index') }}" class="btn btn-default">Cancel</a>
</div>
