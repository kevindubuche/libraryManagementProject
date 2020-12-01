<div class="table-responsive">
    {{-- <table class="table" id="users-table"> --}}
        <table id='myTable' class=' display   table table-bordered table-striped table-condensed'>
        <thead>
            <tr>
        <th></th>
        <th>Nom</th>
        <th>Prenom</th>
        <th>Sexe</th>
        <th>Email</th>
        <th>Inscription</th>
        <th>Type d'utilisateur</th>
        <th>Telephone</th>
                <th >Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
            <td><img src="{{asset('user.jpeg')}}"
                alt="user image"
                class="rounded-circle"
                width="50" 
                height="50"
                style="border-radius:50%"/>
            </td>
            <td>{{ $user->nom }}</td>
            <td>{{ $user->prenom }}</td>
            <td>{{ $user->sexe }}</td>
            <td>{{ $user->email }}</td>
            <td>
                @if($user->is_paye == 1)
                <span class=" fa fa-check " style="color: green"></span>
                @else
                <span class="fa fa-remove" style="color: red" ></span>
                @endif
            </td>
            <td>
                @switch($user->role)
                @case(0)
                    <h5>Gestionnaire</h5>
                    @break
                @case(1)
                     <h5>Bibliothecaire</h5>
                    @break
                @case(2)
                    <h5>Professeur</h5>
                   @break
                @case(3)
                    <h5>Élève local</h5>
                   @break
                @case(4)
                    <h5>Élève exterieur</h5>
                   @break
                @default
            @endswitch
            </td>
            <td>{{ $user->telephone }}</td>
                <td>
                    {!! Form::open(['route' => ['users.destroy', $user->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('users.show', [$user->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('users.edit', [$user->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
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