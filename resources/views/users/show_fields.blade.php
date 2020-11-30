<!-- Nom Field -->
<div class="form-group">
    {!! Form::label('nom', 'Nom:') !!}
    <p>{{ $user->nom }}</p>
</div>

<!-- Prenom Field -->
<div class="form-group">
    {!! Form::label('prenom', 'Prenom:') !!}
    <p>{{ $user->prenom }}</p>
</div>

<!-- Email Field -->
<div class="form-group">
    {!! Form::label('email', 'Email:') !!}
    <p>{{ $user->email }}</p>
</div>

<!-- Is Paye Field -->
<div class="form-group">
    {!! Form::label('is_paye', 'Frais Inscription:') !!}
    <p>
        @switch($user->is_paye)
            @case(1)
                {{ 'Paye' }}
                @break
            @default
                {{ 'Non paye' }}

        @endswitch
    </p>
</div>

<!-- Role Field -->
<div class="form-group">
    {!! Form::label('role', 'Role:') !!}
    <p>
        @switch($user->role)
            @case(0)
                {{ 'Gestionnaire' }}
                @break
            @case(1)
                {{ 'Bibliothecaire' }}
                @break
            @case(2)
                {{ 'Professeur' }}
                @break
            @case(3)
                {{ 'Abonne interne' }}
                @break
            @case(4)
                {{ 'Abonne externe' }}
                @break
            @default
                {{ 'Indetermine' }}
                
        @endswitch    
    </p>
</div>

<!-- Statut Matrimonial Field -->
<div class="form-group">
    {!! Form::label('statut_matrimonial', 'Statut Matrimonial:') !!}
    <p>{{ $user->statut_matrimonial }}</p>
</div>

<!-- Telephone Field -->
<div class="form-group">
    {!! Form::label('telephone', 'Telephone:') !!}
    <p>{{ $user->telephone }}</p>
</div>

<!-- Sexe Field -->
<div class="form-group">
    {!! Form::label('sexe', 'Sexe:') !!}
    <p>{{ $user->sexe }}</p>
</div>

