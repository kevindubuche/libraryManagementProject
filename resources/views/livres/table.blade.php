<div class="table-responsive">
    <table class="table" id="livres-table">
        <thead>
            <tr>
                <th>Position Dans La Bibliotheque</th>
        <th>Titre</th>
        <th>Annee De Parution</th>
        <th>Auteur</th>
        <th>Statut</th>
        <th>Etat</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($livres as $livre)
            <tr>
                <td>{{ $livre->position_dans_la_bibliotheque }}</td>
            <td>{{ $livre->titre }}</td>
            <td>{{ $livre->annee_de_parution }}</td>
            <td>{{ $livre->auteur }}</td>
            <td>{{ $livre->statut }}</td>
            <td>{{ $livre->etat }}</td>
                <td>
                    {!! Form::open(['route' => ['livres.destroy', $livre->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('livres.show', [$livre->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('livres.edit', [$livre->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
