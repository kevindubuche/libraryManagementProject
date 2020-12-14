<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateLivreRequest;
use App\Http\Requests\UpdateLivreRequest;
use App\Repositories\LivreRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use App\Models\Livre;
use App\Http\Middleware\GestionnnaireOuBibliothecaire;
use DateTime;

class LivreController extends AppBaseController
{
    /** @var  LivreRepository */
    private $livreRepository;

    public function __construct(LivreRepository $livreRepo)
    {
        $this->livreRepository = $livreRepo;
         // Middleware only applied to these methods
        $this->middleware(GestionnnaireOuBibliothecaire::class, [
            'only' => [
                 'create' ,
                'store',
                'destroy',
                'edit',
                'update'
            ]
        ]);
    }

    /**
     * Display a listing of the Livre.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $livres = $this->livreRepository->all();

        return view('livres.index')
            ->with('livres', $livres);
    }

    
    public static function verifier_existence_position_pour_creation_livre($position_dans_la_bibliotheque)
    {
        $livre = Livre::where("position_dans_la_bibliotheque",$position_dans_la_bibliotheque)->count();

        return $livre;
    }

    /**
     * Show the form for creating a new Livre.
     *
     * @return Response
     */
    public function create()
    {
        return view('livres.create');
    }

    /**
     * Store a newly created Livre in storage.
     *
     * @param CreateLivreRequest $request
     *
     * @return Response
     */
    public function store(CreateLivreRequest $request)
    {
        $input = $request->all();

        if ($this->verifier_existence_position_pour_creation_livre($request->position_dans_la_bibliotheque) != 0) 
        {
            Flash::error('Position existante');
            return redirect()->back()->withInput();
        }
        $livre = $this->livreRepository->create($input);

        Flash::success('Livre enregistre avec succes !!');

        return redirect(route('livres.index'));
    }

    /**
     * Display the specified Livre.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $livre = $this->livreRepository->find($id);

        if (empty($livre)) {
            Flash::error('Livre introuvable !!');

            return redirect(route('livres.index'));
        }

        return view('livres.show')->with('livre', $livre);
    }

    /**
     * Show the form for editing the specified Livre.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $livre = $this->livreRepository->find($id);

        if (empty($livre)) {
            Flash::error('Livre introuvable !!');

            return redirect(route('livres.index'));
        }

        return view('livres.edit')->with('livre', $livre);
    }

    /**
     * Update the specified Livre in storage.
     *
     * @param int $id
     * @param UpdateLivreRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateLivreRequest $request)
    {
        $livre = $this->livreRepository->find($id);

        if (empty($livre)) {
            Flash::error('Livre introuvable !!');

            return redirect(route('livres.index'));
        }

        $livre = $this->livreRepository->update($request->all(), $id);

        Flash::success('Livre modifie avec succes !!');

        return redirect(route('livres.index'));
    }

    /**
     * Remove the specified Livre from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $livre = $this->livreRepository->find($id);

        if (empty($livre)) {
            Flash::error('Livre introuvable !!');

            return redirect(route('livres.index'));
        }

        // $this->livreRepository->delete($id);
        Livre::where('id', $id)->forceDelete();

        Flash::success('Livre supprime avec succes !!');

        return redirect(route('livres.index'));
    }

    public function livrescsv()
    {
        $liste_des_categories = Livre::select('categorie')
        ->groupBy('categorie')
       ->get();
       $liste_des_auteurs = Livre::select('auteur')
        ->groupBy('auteur')
       ->get();
        $livres = Livre::all();
        return view('livres.tablecsv', compact(['livres','liste_des_categories','liste_des_auteurs']));
    }

    public function exportCsv(Request $request)
    {
        $livres = Livre::where('id', '>', '0');//condition toujours vraie
        if($request->categorie != "Tous") {                      
            $livres->where('categorie', $request->categorie);
        }
        if($request->auteur != "Tous") {                      
            $livres->where('auteur', $request->auteur);
        }
         if(!empty($request->created_at_debut)  && !empty($request->created_at_fin) ) {                      
            $livres->whereBetween('created_at',
            [ (new DateTime($request->created_at_debut))->format('Y-m-d H:i:s'),
            (new DateTime($request->created_at_fin))->format('Y-m-d H:i:s')]);
        }
        $livres = $livres->orderBy('created_at', 'DESC')->get();

        if($request->submit =='download')
        {
       $fileName = 'Liste_des_livres.csv';
            $headers = array(
                "Content-type"        => "text/csv",
                "Content-Disposition" => "attachment; filename=$fileName",
                "Pragma"              => "no-cache",
                "Cache-Control"       => "must-revalidate, post-check=0, pre-check=0",
                "Expires"             => "0",
                "Charset"             =>"UTF-8",
                "Content-Encoding"    => "UTF-8"
            );
    
            $columns = array('ID','Titre','Année de parution','Auteur','Statut','Catégorie','Date de création');
            
            $callback = function() use($livres, $columns) {
                $file = fopen('php://output', 'w');
                fputcsv($file, $columns);
                foreach ($livres as $livre) {
                    $row['ID']  = $livre->id;
                    $row['Titre']  = $livre->titre;
                    $row['Année de parution']   = $livre->annee_de_parution;
                    $row['Auteur']    = $livre->auteur;
                    $row['Statut']  = $livre->statut ;
                    $row['Catégorie']  = $livre->categorie;
                    $row['Date de création']  = $livre->created_at->format('d-m-y');
    
                    fputcsv($file, array($row['ID'], $row['Titre'], $row['Année de parution'], $row['Auteur'], $row['Statut'], $row['Catégorie'], $row['Date de création']));
                }
                
                fclose($file);
            };
    
            return response()->stream($callback, 200, $headers);
        }
         else
        {
            $inputs =$request->all();
            $liste_des_categories = Livre::select('categorie')
            ->groupBy('categorie')
           ->get();
           $liste_des_auteurs = Livre::select('auteur')
            ->groupBy('auteur')
           ->get();
            return view('livres.tablecsv', compact('livres','liste_des_categories','liste_des_auteurs','inputs'));
        }
        }



}
