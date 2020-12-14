<div class="table-responsive">
    <table id='myTable' class=' display   table table-bordered table-striped table-condensed'>
        <thead>
            <tr>
                <th>Abonné</th>
                <th>Type d'abonné</th>
        <th>Livre</th>
        <th>Date De Prêt</th>
        <th>Date De Restitution</th>
                <th >Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($emprunts as $emprunt)
            <tr>
            <td>{{ $emprunt->idUtilisateur->nom }} {{ $emprunt->idUtilisateur->prenom  }}</td>
            <td>
                @switch($emprunt->idUtilisateur->role )
                    @case(0)
                        Gestionnaire
                        @break
                    @case(1)
                        Bibliothecaire
                        @break
                    @case(2)
                        Professeur
                        @break
                    @case(3)
                        Etudiant local
                        @break
                    @case(4)
                        Etudiant ext.
                        @break
                    @default
                        
                @endswitch
            </td>
            <td>{{ $emprunt->idLivre->titre }}</td>
            <td>{{ $emprunt->created_at->format('d M y')}}</td>
            <td>{{ $emprunt->date_de_restitution}}</td>
                <td>
                    <div class='btn-group'>
                        <a href="{{ route('emprunts.show', [$emprunt->id]) }}" class='btn btn-default btn-xs'><i >Détails</i></a>
                   </div>
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