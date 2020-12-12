<!-- Id Utilisateur Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_utilisateur', 'Abonné:') !!}
    <select class="form-control" name="id_utilisateur" id="id_utilisateur" required>
        @foreach($abonnes as $abonne)
        <option value="{{$abonne->id}}" @isset($abonne->id)
            @isset($emprunt->id_utilisateur) 
                @if ($abonne->id==$emprunt->id_utilisateur)
                selected
                @endif
            @endisset
        @endisset>{{$abonne->nom}} {{$abonne->prenom}} (ID: {{$abonne->id}})</option>
        @endforeach
    </select>
</div>

<!-- Id Livre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_livre', 'Ouvrage:') !!}
    <select class="form-control" name="id_livre" id="id_livre" required>
        @if (isset($emprunt->id))
        <option value="{{$emprunt->id_livre}}">{{$emprunt->idLivre->titre }}</option>
        @else
            @foreach($ouvrages_disponibles as $ouvrage)
            <option value="{{$ouvrage->id}}">{{$ouvrage->titre}}</option>
            @endforeach
        @endif
      
    </select>
</div>

<!-- Date De Restitution Field -->
<div class="form-group col-sm-6">
    {!! Form::label('date_de_restitution', 'Date De Restitution:') !!}
    <input type="text" name="date_de_restitution" id="date_de_restitution" class="form-control"
    @if (isset($emprunt->id))
    @else
    disabled
    @endif
    >
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
