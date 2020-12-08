<!-- Id Utilisateur Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_utilisateur', 'Abonné:') !!}
    <select class="form-control" name="id_utilisateur" id="id_utilisateur" required>
        @foreach($abonnes as $abonne)
        <option value="{{$abonne->id}}" @isset($abonne->id)
            @isset($emprunt->id_livre) 
                @if ($abonne->id==$emprunt->id_utilisateur)
                selected
                @endif
            @endisset
        @endisset>{{$abonne->nom}} {{$abonne->prenom}}</option>
        @endforeach
    </select>
</div>

<!-- Id Livre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_livre', 'Ouvrage:') !!}
    <select class="form-control" name="id_livre" id="id_livre" required>
        @foreach($ouvrages as $ouvrage)
        <option value="{{$ouvrage->id}}" @isset($ouvrage->id)
            @isset($emprunt->id_livre) 
                @if ($ouvrage->id==$emprunt->id_livre)
                selected
                @endif
            @endisset
        @endisset>{{$ouvrage->titre}}</option>
        @endforeach
    </select>
</div>

<!-- Date De Restitution Field -->
<div class="form-group col-sm-6">
    {!! Form::label('date_de_restitution', 'Date De Restitution:') !!}
    {!! Form::text('date_de_restitution', null, ['class' => 'form-control','id'=>'date_de_restitution']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#date_de_restitution').datetimepicker({
            format: 'YYYY-MM-DD',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Enregistrer', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('emprunts.index') }}" class="btn btn-default">Annuler</a>
</div>
