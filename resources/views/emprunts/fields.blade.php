<!-- Id Utilisateur Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_utilisateur', 'Id Utilisateur:') !!}
    {!! Form::number('id_utilisateur', null, ['class' => 'form-control']) !!}
</div>

<!-- Id Livre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_livre', 'Id Livre:') !!}
    {!! Form::number('id_livre', null, ['class' => 'form-control']) !!}
</div>

<!-- Date De Restitution Field -->
<div class="form-group col-sm-6">
    {!! Form::label('date_de_restitution', 'Date De Restitution:') !!}
    {!! Form::text('date_de_restitution', null, ['class' => 'form-control','id'=>'date_de_restitution']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#date_de_restitution').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('emprunts.index') }}" class="btn btn-default">Cancel</a>
</div>
