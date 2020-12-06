<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\LivreRepository;
use App\Models\Livre;

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
        // $livres = $this->livreRepository->all();

        // return view('livres.index')
        //     ->with('livres', $livres);
        $livres = Livre::all()->random(4);
        return view('welcome', compact(['livres']));
    }

}
