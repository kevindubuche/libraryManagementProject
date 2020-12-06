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
        $livres = Livre::all();
        return view('welcome', compact(['livres']));
    }

}
