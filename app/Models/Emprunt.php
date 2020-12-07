<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Emprunt
 * @package App\Models
 * @version December 7, 2020, 12:28 am UTC
 *
 * @property \App\Models\Livre $idLivre
 * @property \App\Models\User $idUtilisateur
 * @property integer $id_utilisateur
 * @property integer $id_livre
 * @property string $date_de_restitution
 */
class Emprunt extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'emprunts';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'id_utilisateur',
        'id_livre',
        'date_de_restitution'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'id_utilisateur' => 'integer',
        'id_livre' => 'integer',
        'date_de_restitution' => 'date'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'id_utilisateur' => 'required',
        'id_livre' => 'required',
        'date_de_restitution' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function idLivre()
    {
        return $this->belongsTo(\App\Models\Livre::class, 'id_livre');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function idUtilisateur()
    {
        return $this->belongsTo(\App\Models\User::class, 'id_utilisateur');
    }
}
