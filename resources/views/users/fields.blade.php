<!-- Nom Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nom', 'Nom*:') !!}
    {!! Form::text('nom', null, ['class' => 'form-control','maxlength' => 45,'maxlength' => 45, 'required']) !!}
</div>

<!-- Prenom Field -->
<div class="form-group col-sm-6">
    {!! Form::label('prenom', 'Prenom*:') !!}
    {!! Form::text('prenom', null, ['class' => 'form-control','maxlength' => 45,'maxlength' => 45, 'required']) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email*:') !!}
    {!! Form::email('email', null, ['class' => 'form-control','maxlength' => 45,'maxlength' => 45, 'required']) !!}
</div>

<!-- Password Field -->
<div class="form-group col-sm-6">
    {!! Form::label('password', 'Password*:') !!}
    {!! Form::password('password', ['class' => 'form-control','maxlength' => 255,'maxlength' => 255, 'required']) !!}
</div>

<!-- Confirmation password Field -->
<div class="form-group col-sm-6">
    {!! Form::label('confirmation_password', 'Confirmation Password*:') !!}
    {!! Form::password('confirmation_password', ['class' => 'form-control','maxlength' => 255,'maxlength' => 255, 'required']) !!}
</div>


<!-- Remenber Token Field -->
{{-- <div class="form-group col-sm-6">
    {!! Form::label('remenber_token', 'Remenber Token:') !!}
    {!! Form::text('remenber_token', null, ['class' => 'form-control','maxlength' => 45,'maxlength' => 45]) !!}
</div> --}}

<!-- Role Field -->
<div class="form-group col-sm-6">
    <label>Niveau d'acces*</label>
    <select class="form-control" name="role" id="role" required>
        <option value="0">Gestionnaire</option>
        <option value="1">Bibliothecaire</option>
        <option value="2">Professeur</option>
        <option value="3">Etudiant interne</option>
        <option value="4">Etudiant externe</option>
    </select>
</div>


<!-- Statut Matrimonial Field -->
<div class="form-group col-sm-6">
    <label>Statut matrimonial*</label>
    <select class="form-control" name="statut_matrimonial" id="statut_matrimonial" required>
        <option value="Célibataire">Célibataire</option>
        <option value="Fiancé(e)">Fiancé(e)</option>
        <option value="Marié(e)">Marié(e)</option>
        <option value="Divorcé(e)">Divorcé(e)</option>
        <option value="Veuf(ve)">Veuf(ve)</option>
    </select>
</div>

<!-- Telephone Field -->
<div class="form-group col-sm-6">
    {!! Form::label('telephone', 'Telephone:') !!}
    {!! Form::text('telephone', null, ['class' => 'form-control','maxlength' => 45,'maxlength' => 45]) !!}
</div>

<!-- Sexe Field -->
<div class="form-group col-sm-6">
    <label>Sexe*</label>
    <select class="form-control" name="sexe" id="sexe" required>
        <option value="Masculin">Masculin</option>
        <option value="Feminin">Feminin</option>
        <option value="Autre">Autre</option>
    </select>
</div>

<!-- Is Paye Field -->
<div class="form-group col-sm-6">
    {!! Form::label('is_paye', 'Is Paye:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('is_paye', 0) !!}
        {!! Form::checkbox('is_paye', '1', null) !!}
    </label>
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Enregistrer', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('users.index') }}" class="btn btn-default">Annuler</a>
</div>
