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

<!-- Password Field -->
<div class="form-group">
    {!! Form::label('password', 'Password:') !!}
    <p>{{ $user->password }}</p>
</div>

<!-- Is Paye Field -->
<div class="form-group">
    {!! Form::label('is_paye', 'Is Paye:') !!}
    <p>{{ $user->is_paye }}</p>
</div>

<!-- Remenber Token Field -->
<div class="form-group">
    {!! Form::label('remenber_token', 'Remenber Token:') !!}
    <p>{{ $user->remenber_token }}</p>
</div>

<!-- Role Field -->
<div class="form-group">
    {!! Form::label('role', 'Role:') !!}
    <p>{{ $user->role }}</p>
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

