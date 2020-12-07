<div class="table-responsive">
    <table class="table" id="emprunts-table">
        <thead>
            <tr>
                <th>Id Utilisateur</th>
        <th>Id Livre</th>
        <th>Date De Restitution</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($emprunts as $emprunt)
            <tr>
                <td>{{ $emprunt->id_utilisateur }}</td>
            <td>{{ $emprunt->id_livre }}</td>
            <td>{{ $emprunt->date_de_restitution }}</td>
                <td>
                    {!! Form::open(['route' => ['emprunts.destroy', $emprunt->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('emprunts.show', [$emprunt->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('emprunts.edit', [$emprunt->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
