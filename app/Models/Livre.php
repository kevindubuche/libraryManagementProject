<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Livre
 * @package App\Models
 * @version November 30, 2020, 11:05 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $emprunts
 * @property string $position_dans_la_bibliotheque
 * @property string $titre
 * @property string $annee_de_parution
 * @property string $auteur
 * @property string $statut
 * @property integer $etat
 */
class Livre extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'livres';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'position_dans_la_bibliotheque',
        'titre',
        'annee_de_parution',
        'auteur',
        'statut',
        'etat'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'position_dans_la_bibliotheque' => 'string',
        'titre' => 'string',
        'annee_de_parution' => 'date',
        'auteur' => 'string',
        'statut' => 'string',
        'etat' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'position_dans_la_bibliotheque' => 'nullable|string|max:45',
        'titre' => 'nullable|string|max:45',
        'annee_de_parution' => 'nullable',
        'auteur' => 'nullable|string|max:45',
        'statut' => 'nullable|string|max:45',
        'etat' => 'nullable|integer',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function emprunts()
    {
        return $this->hasMany(\App\Models\Emprunt::class, 'id_livre');
    }
}
