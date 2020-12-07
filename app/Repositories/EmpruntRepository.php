<?php

namespace App\Repositories;

use App\Models\Emprunt;
use App\Repositories\BaseRepository;

/**
 * Class EmpruntRepository
 * @package App\Repositories
 * @version December 7, 2020, 12:28 am UTC
*/

class EmpruntRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id_utilisateur',
        'id_livre',
        'date_de_restitution'
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
        return Emprunt::class;
    }
}
