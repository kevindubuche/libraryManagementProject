<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateEmpruntRequest;
use App\Http\Requests\UpdateEmpruntRequest;
use App\Repositories\EmpruntRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use App\Models\Emprunt;
use App\Models\User;
use App\Models\Livre;

class EmpruntController extends AppBaseController
{
    /** @var  EmpruntRepository */
    private $empruntRepository;


    public function __construct(EmpruntRepository $empruntRepo)
    {
        $this->empruntRepository = $empruntRepo;
    }

    /**
     * Display a listing of the Emprunt.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $emprunts = $this->empruntRepository->all();

        return view('emprunts.index')
            ->with('emprunts', $emprunts);
    }

    public static function verifier_existence_utilisateur_pour_creation_emprunt($id)
    {
        $user = User::where("id",$id)->count();

        return $user;
    }

    public static function verifier_existence_livre_pour_creation_emprunt($id)
    {
        $livre = Livre::where("id",$id)->count();

        return $livre;
    }

    public static function verifier_si_abonne_a_paye($id)
    {
        $user = User::where("id",$id)->first();         
        if($user->is_paye){
            return true;
        }
        
        return false;
    }

    public static function verifier_si_abonne_a_atteint_limite_de_pret($id_utilisateur)
    {
        $quantite_prets = Emprunt::where("id_utilisateur",$id_utilisateur)
        ->wherenull('date_de_restitution')
        ->count();
        return $quantite_prets;
    }
    public static function changer_statut_d_un_livre($id)
    {
        $livre = Livre::find($id);
        $livre->statut = ($livre->statut== false) ? true : false;
        $result = $livre->save();

        return $result;
    }
    /**
     * Show the form for creating a new Emprunt.
     *
     * @return Response
     */
    public function create()
    {
        $abonnes = User::orderBy('nom', 'ASC')->get();
        $ouvrages_disponibles = Livre::where('statut', 1)->get();
        return view('emprunts.create', compact(['abonnes','ouvrages_disponibles']));
    }

    /**
     * Store a newly created Emprunt in storage.
     *
     * @param CreateEmpruntRequest $request
     *
     * @return Response
     */
    public function store(CreateEmpruntRequest $request)
    {
        $input = $request->all();
        if ($this->verifier_existence_utilisateur_pour_creation_emprunt($request->id_utilisateur) == 0) 
        {
            Flash::error('Cet utilisateur n\'existe pas');
            return redirect()->back()->withInput();
        }
        if($this->verifier_si_abonne_a_paye($request->id_utilisateur) == false)
        {
            Flash::error('Echec ! Cet utilisateur n\'a pas payé !');
            return redirect()->back()->withInput();
        }
        if ($this->verifier_si_abonne_a_atteint_limite_de_pret($request->id_utilisateur) >= 35)
        {
            Flash::error('Echec ! Cet utilisateur a déjà atteint son quota !');
            return redirect()->back()->withInput();
        }
        if ($this->verifier_existence_livre_pour_creation_emprunt($request->id_livre) == 0) 
        {
            Flash::error('Ce livre n\'existe pas');
            return redirect()->back()->withInput();
        }
        

        $emprunt = $this->empruntRepository->create($input);
        $this->changer_statut_d_un_livre($request->id_livre);

        Flash::success('Emprunt enregistre avec succes !');

        return redirect(route('emprunts.index'));
    }

    /**
     * Display the specified Emprunt.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $emprunt = $this->empruntRepository->find($id);

        if (empty($emprunt)) {
            Flash::error('Emprunt non trouve !');

            return redirect(route('emprunts.index'));
        }

        return view('emprunts.show')->with('emprunt', $emprunt);
    }

    /**
     * Show the form for editing the specified Emprunt.
     *
     * @param int $idgit commit -m 'Added the Emprunt
     *
     * @return Response
     */
    public function edit($id)
    {
        $emprunt = $this->empruntRepository->find($id);
        $abonnes = User::all();
        $ouvrages_disponibles = Livre::where('statut', 1)->get();

        if (empty($emprunt)) {
            Flash::error('Emprunt non trouve !');

            return redirect(route('emprunts.index'));
        }

        return view('emprunts.edit', compact(['abonnes','ouvrages_disponibles','emprunt']));
    }

    /**
     * Update the specified Emprunt in storage.
     *
     * @param int $id
     * @param UpdateEmpruntRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateEmpruntRequest $request)
    {
        $emprunt = $this->empruntRepository->find($id);

        if (empty($emprunt)) {
            Flash::error('Emprunt non trouve !');

            return redirect(route('emprunts.index'));
        }

        $emprunt = $this->empruntRepository->update($request->all(), $id);
        if($request->date_de_restitution)
        {
            $this->changer_statut_d_un_livre($request->id_livre);
        }
        Flash::success('Emprunt modifie avec succes !');

        return redirect(route('emprunts.index'));
    }

    /**
     * Remove the specified Emprunt from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $emprunt = $this->empruntRepository->find($id);

        if (empty($emprunt)) {
            Flash::error('Emprunt non trouve !');

            return redirect(route('emprunts.index'));
        }

        $this->empruntRepository->delete($id);

        Flash::success('Emprunt supprime avec succes !');

        return redirect(route('emprunts.index'));
    }
}
