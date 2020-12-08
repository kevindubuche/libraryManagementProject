<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\LivreRepository;
use App\Models\Livre;
use App\Models\Emprunt;

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
        $livres = Livre::all();
        // $livres_plus_pupulaires = Emprunt::select('*')
        // ->groupBy('id_livre')
        // ->orderByRaw('COUNT(*) DESC')
        // ->limit(3)
        // ->get();
        // dd($livres_plus_pupulaires);
        return view('welcome', compact(['livres']));
    }

}
