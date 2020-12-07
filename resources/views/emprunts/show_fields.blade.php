<!-- Id Utilisateur Field -->
<div class="form-group">
    {!! Form::label('id_utilisateur', 'Id Utilisateur:') !!}
    <p>{{ $emprunt->id_utilisateur }}</p>
</div>

<!-- Id Livre Field -->
<div class="form-group">
    {!! Form::label('id_livre', 'Id Livre:') !!}
    <p>{{ $emprunt->id_livre }}</p>
</div>

<!-- Date De Restitution Field -->
<div class="form-group">
    {!! Form::label('date_de_restitution', 'Date De Restitution:') !!}
    <p>{{ $emprunt->date_de_restitution }}</p>
</div>

