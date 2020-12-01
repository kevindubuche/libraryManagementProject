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
    <label>Statut*</label>
    <select class="form-control" name="statut" id="statut" required>
        <option value="0">Non disponible</option>
        <option value="1">Disponible</option>
    </select>
</div>

<!-- Etat Field -->
<div class="form-group col-sm-6">
    <label>Etat*</label>
    <select class="form-control" name="etat" id="etat" required>
        <option value="0">A jeter</option>
        <option value="1">Grande reparation</option>
        <option value="2">A reparer</option>
        <option value="3">En bon etat</option>
        <option value="4">Neuf</option>
    </select>
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Enregistrer', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('livres.index') }}" class="btn btn-default">Annuler</a>
</div>
