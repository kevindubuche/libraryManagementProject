@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Liste des livres
        </h1>
              
     <div class="box box-primary">
        <form action="{{ route('download-csv-livres')}}" method="post" class="row" >
            @csrf
            <div class="col-md-12 form-group">
              <table  >
                  <thead >
                      <tr>
                        <td></td>
                  <label>Filtrage:</label>
                      </tr>
                  </thead>
                  <tbody>
                        <tr>
                            <td>Catégorie</td>
                            <td>
                                <select class="form-control" name="categorie" id="categorie" >
                                <option  value="Tous"
                                @isset($inputs['categorie'])
                                    @if($inputs['categorie'] == "Tous")
                                    selected
                                    @endif
                                @endisset>Tous</option>
                                @foreach($liste_des_categories as $categorie)
                                <option value="{{$categorie->categorie}}" 
                                    @isset($inputs['categorie'])
                                    @if($inputs['categorie'] == $categorie->categorie)
                                    selected
                                    @endif
                                @endisset >{{$categorie->categorie}}</option>
                                @endforeach
                            </select>
                            </td>

                            <td>Auteur</td>
                            <td>
                                <select class="form-control" name="auteur" id="auteur" >
                                <option  value="Tous"
                                @isset($inputs['auteur'])
                                    @if($inputs['auteur'] == "Tous")
                                    selected
                                    @endif
                                @endisset>Tous</option>
                                @foreach($liste_des_auteurs as $auteur)
                                <option value="{{$auteur->auteur}}" 
                                    @isset($inputs['auteur'])
                                    @if($inputs['auteur'] == $auteur->auteur)
                                    selected
                                    @endif
                                @endisset >{{$auteur->auteur}}</option>
                                @endforeach
                            </select>
                            </td>
                        
                            <td>Crée du</td>
                            <td><input type="date"  name="created_at_debut" 
                                @isset($inputs['created_at_debut'])
                                value="{{$inputs['created_at_debut']}}"
                                  @endisset
                                      class="form-control datepicker" id="created_at_debut" placeholder="Date de creation" autocomplete="off"></td>
                            <td>Au</td>
                            <td> <input type="date"  name="created_at_fin" 
                                @isset($inputs['created_at_fin'])
                                value="{{$inputs['created_at_fin']}}"
                                  @endisset
                                  class=" form-control datepicker" id="created_at_fin" placeholder="Date de creation" autocomplete="off"></td>
                            
                        </tr>
                      
                    
                  </tbody>
              </table> 
          </div>
            {{-- Bouton PDF --}}
          <div class="btn btn-group" style=" float:left; margin-right:25px">
            <button type="submit" name="submit" value="download" class="btn btn-sm btn-success"><i class="fa fa-file-excel-o"></i> Télécharger</button>

            <button type="submit" name="submit" value="reload" class="btn btn-sm btn-warning"><i class="fa fa-refresh" style="color:white"></i></button>
        </div>
        </form>
    </div>

    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
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
                </div>
            </div>
        </div>
    </div>
@endsection


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