<?php

namespace App\Repositories;

use App\Models\Livre;
use App\Repositories\BaseRepository;

/**
 * Class LivreRepository
 * @package App\Repositories
 * @version November 30, 2020, 11:05 pm UTC
*/

class LivreRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'position_dans_la_bibliotheque',
        'titre',
        'annee_de_parution',
        'auteur',
        'statut',
        'etat',
        'resume',
        'isbn',
        'nombre_de_pages'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Livre::class;
    }
}
