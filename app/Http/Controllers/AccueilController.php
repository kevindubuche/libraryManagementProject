<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\LivreRepository;
use App\Models\Livre;
use App\Models\Emprunt;
use App\Models\User;

class AccueilController extends Controller
{
    
    /** @var  LivreRepository */
    private $livreRepository;

    public function __construct(LivreRepository $livreRepo)
    {
        $this->livreRepository = $livreRepo;
    }

    /**
     * Display a listing of the Livre.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function home(Request $request)
    {
        //ces info se retrouvent dans la page d'accueil
        $livres = Livre::all();
        $top_3_livres_les_plus_pupulaires = Emprunt::select('id_livre')
        ->groupBy('id_livre')
        ->orderByRaw('COUNT(*) DESC')
        ->limit(3)
        ->get();
        $total_abonnes = User::all()->count();
        $total_livres = Livre::all()->count();
        $total_transactions = Emprunt::all()->count();
        return view('welcome', compact(
            ['livres','top_3_livres_les_plus_pupulaires',
            'total_abonnes','total_livres','total_transactions']));
    }

    public function apropos(Request $request)
    {
        return view('apropos');
    }

    public function categories(Request $request)
    {
        $liste_des_livres_goupes_par_categorie = Livre::select('categorie')
        ->groupBy('categorie')
       ->paginate(12);
        return view('categories', compact('liste_des_livres_goupes_par_categorie'));
    }

    public function contact(Request $request)
    {
        return view('contact');
    }
    
    public function categorie($categorie)
    {
        $liste_des_livres_goupes_par_categorie = Livre::where('categorie', $categorie)->paginate(12);
        return view('noslivres', compact('liste_des_livres_goupes_par_categorie'));
       
    }

}
