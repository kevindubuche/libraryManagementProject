<!-- Position Dans La Bibliotheque Field -->
<div class="form-group col-sm-6">
    {!! Form::label('position_dans_la_bibliotheque', 'Position Dans La Bibliotheque:') !!}
    {!! Form::text('position_dans_la_bibliotheque', null, ['class' => 'form-control','maxlength' => 45,'maxlength' => 45]) !!}
</div>

<!-- Titre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('titre', 'Titre:') !!}
    {!! Form::text('titre', null, ['class' => 'form-control','maxlength' => 255]) !!}
</div>

<!-- Annee De Parution Field -->
<div class="form-group col-sm-6">
    {!! Form::label('annee_de_parution', 'Annee De Parution:') !!}
    {!! Form::text('annee_de_parution', null, ['class' => 'form-control','id'=>'annee_de_parution']) !!}
</div>

@push('scripts')
@push('scripts')
    <script type="text/javascript">
        $('#annee_de_parution').datetimepicker({
            format: 'YYYY',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Auteur Field -->
<div class="form-group col-sm-6">
    {!! Form::label('auteur', 'Auteur:') !!}
    {!! Form::text('auteur', null, ['class' => 'form-control','maxlength' => 45]) !!}
</div>

<!-- Summary Field -->
<div class="form-group col-sm-6">
    {!! Form::label('resume', 'Resume:') !!}
    {!! Form::textarea('resume', null, ['class' => 'form-control']) !!}
</div>

<!-- ISBN Field -->
<div class="form-group col-sm-6">
    {!! Form::label('isbn', 'ISBN:') !!}
    {!! Form::text('isbn', null, ['class' => 'form-control','maxlength' => 45]) !!}
</div>

<!-- Categorie Field -->
<div class="form-group col-sm-6">
    {!! Form::label('categorie', 'Categorie:') !!}
    {!! Form::text('categorie', null, ['class' => 'form-control','maxlength' => 255]) !!}
</div>

<!-- Nombre de pages Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre_de_pages', 'Nombre de pages:') !!}
    {!! Form::number('nombre_de_pages', null, ['class' => 'form-control']) !!}
</div>

<!-- Statut Field -->
<div class="form-group col-sm-6">
    <label>Statut*</label>
    <select class="form-control" name="statut" id="statut" required>
            <option value="0" @isset($livre->statut)
                @if ($livre->statut==0)
                    selected
                @endif
            @endisset>Non disponible</option>
            <option value="1" @isset($livre->statut)
                @if ($livre->statut==1)
                    selected
                @endif
            @endisset>Disponible</option>
    </select>
</div>

<!-- Etat Field -->
<div class="form-group col-sm-6">
    <label>Etat*</label>
    <select class="form-control" name="etat" id="etat" required>
        <option value="0" @isset($livre->etat)
            @if ($livre->etat==0)
                selected
            @endif
        @endisset>A jeter</option>
        <option value="1" @isset($livre->etat)
            @if ($livre->etat==1)
                selected
            @endif
        @endisset>Grande reparation</option>
        <option value="2" @isset($livre->etat)
            @if ($livre->etat==2)
                selected
            @endif
        @endisset>A reparer</option>
        <option value="3" @isset($livre->etat)
            @if ($livre->etat==3)
                selected
            @endif
        @endisset>En bon etat</option>
        <option value="4"@isset($livre->etat)
            @if ($livre->etat==4)
                selected
            @endif
        @endisset>Neuf</option>
    </select>
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Enregistrer', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('livres.index') }}" class="btn btn-default">Annuler</a>
</div>            </div>

