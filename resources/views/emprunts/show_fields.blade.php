<!-- Id Utilisateur Field -->
<div class="form-group">
    {!! Form::label('id_utilisateur', 'Utilisateur:') !!}
    <p>{{ $emprunt->idUtilisateur->nom }} {{ $emprunt->idUtilisateur->prenom  }}</p>
</div>

<!-- Id Livre Field -->
<div class="form-group">
    {!! Form::label('id_livre', 'Livre:') !!}
    <p>{{ $emprunt->idLivre->titre }}</p>
</div>

<!-- Date De Creation Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Date de création:') !!}
    <p>{{ $emprunt->created_at->format('d M y') }}</p>
</div>

<!-- Date De Restitution Field -->
<div class="form-group">
    {!! Form::label('relance', 'Déjà relancé:') !!}
    <p>
            @if ($emprunt->relance)
                Oui
            @else
                Non
            @endif
    </p>
</div>

<!-- Date De Restitution Field -->
<div class="form-group">
    {!! Form::label('date_de_restitution', 'Date De Restitution:') !!}
    <p>{{ $emprunt->date_de_restitution }}</p>
</div>


