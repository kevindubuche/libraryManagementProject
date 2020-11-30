<!-- Position Dans La Bibliotheque Field -->
<div class="form-group">
    {!! Form::label('position_dans_la_bibliotheque', 'Position Dans La Bibliotheque:') !!}
    <p>{{ $livre->position_dans_la_bibliotheque }}</p>
</div>

<!-- Titre Field -->
<div class="form-group">
    {!! Form::label('titre', 'Titre:') !!}
    <p>{{ $livre->titre }}</p>
</div>

<!-- Annee De Parution Field -->
<div class="form-group">
    {!! Form::label('annee_de_parution', 'Annee De Parution:') !!}
    <p>{{ $livre->annee_de_parution }}</p>
</div>

<!-- Auteur Field -->
<div class="form-group">
    {!! Form::label('auteur', 'Auteur:') !!}
    <p>{{ $livre->auteur }}</p>
</div>

<!-- Statut Field -->
<div class="form-group">
    {!! Form::label('statut', 'Statut:') !!}
    <p>{{ $livre->statut }}</p>
</div>

<!-- Etat Field -->
<div class="form-group">
    {!! Form::label('etat', 'Etat:') !!}
    <p>{{ $livre->etat }}</p>
</div>

