<div class="table-responsive">
    <table id='myTable' class=' display   table table-bordered table-striped table-condensed'>
        <thead>
            <tr>
        <th>ID</th>
        <th>Titre</th>
        <th>Auteur</th>
        <th>Position</th>
        <th>Annee De Parution</th>
        <th>Statut</th>
        <th>Etat</th>
                <th >Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($livres as $livre)
            <tr>
            <td>{{ $livre->id }}</td>
            <td>{{ $livre->titre }}</td>
            <td>{{ $livre->auteur }}</td>
            <td>{{ $livre->position_dans_la_bibliotheque }}</td>
            <td>{{ $livre->annee_de_parution }}</td>
            <td>
                @switch($livre->statut)
                @case(0)
                     <h5 style="color: red">Non disponible</h5>
                    @break
                @case(1)
                    <h5 style="color: green">Disponible</h5>
                   @break
                   Message        @default
                     <h5>Indetermine</h5>
            @endswitch
            </td>
            <td>
                @for ($i = 0; $i <= $livre->etat; $i++)
                <i class="fa fa-star"></i>
                @endfor
            </td>
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

@push('scripts')
<script>
    $(document).ready(function()
    {
        $('#myTable').DataTable({  
            // alert('okokok');
            select:true,
            "language": {
            "lengthMenu": "Voir _MENU_ lignes par page",
            "zeroRecords": "Aucune information",
            "info": "_PAGE_ sur _PAGES_",
            "infoEmpty": "Aucun résultat trouvé",
            "infoFiltered": "(filtre de _MAX_ total résultats)",
            "search": "Rechercher",
            "paginate":{
            "previous":"Précedent",
            "next":"Suivant"
            }


        },
        buttons:['selectRows']
    }

        );
    });
</script>
@endpush