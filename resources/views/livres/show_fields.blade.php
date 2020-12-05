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

<!-- ISBN Field -->
<div class="form-group">
    {!! Form::label('isbn', 'ISBN:') !!}
    <p>{{ $livre->isbn }}</p>
</div>

<!-- Statut Field -->
<div class="form-group">
    {!! Form::label('statut', 'Statut:') !!}
    <p>{{ $livre->statut }}</p>
</div>

<!-- Etat Field -->
<div class="form-group">
    {!! Form::label('etat', 'Etat:') !!}
    <p>
        @switch($livre->etat)
            @case(0)
                {{ 'A jeter' }}
                @break
            @case(1)
                {{ 'Grande reparation' }}
                @break
            @case(2)
                {{ 'A reparer' }}
                @break
            @case(3)
                {{ 'En bon etat' }}
                @break
            @case(4)
                {{ 'Neuf' }}
                @break
            @default
                {{ 'Indetermine' }}
                
        @endswitch    
    </p>
</div>

<!-- Nombre de pages Field -->
<div class="form-group">
    {!! Form::label('nombre_de_pages', 'Nombre de pages:') !!}
    <p>{{ $livre->nombre_de_pages }}</p>
</div>

<!-- Created at Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Date de creation:') !!}
    <p>{{ $livre->created_at }}</p>
</div>

<!-- Summary Field -->
<div class="form-group">
    {!! Form::label('resume', 'Resume:') !!}
    <p>{{ $livre->resume }}</p>
</div>