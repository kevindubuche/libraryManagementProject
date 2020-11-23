<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class User
 * @package App\Models
 * @version November 23, 2020, 9:25 pm UTC
 *
 * @property \App\Models\Abonne $abonne
 * @property \App\Models\Bibliothecaire $bibliothecaire
 * @property \Illuminate\Database\Eloquent\Collection $emprunts
 * @property \App\Models\Gestionnaire $gestionnaire
 * @property string $nom
 * @property string $prenom
 * @property string $email
 * @property string $remenber_token
 * @property integer $role
 */
class User extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'users';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'nom',
        'prenom',
        'email',
        'remenber_token',
        'role'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nom' => 'string',
        'prenom' => 'string',
        'email' => 'string',
        'remenber_token' => 'string',
        'role' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nom' => 'required|string|max:45',
        'prenom' => 'required|string|max:45',
        'email' => 'nullable|string|max:45',
        'remenber_token' => 'nullable|string|max:45',
        'role' => 'required|integer',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     **/
    public function abonne()
    {
        return $this->hasOne(\App\Models\Abonne::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     **/
    public function bibliothecaire()
    {
        return $this->hasOne(\App\Models\Bibliothecaire::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function emprunts()
    {
        return $this->hasMany(\App\Models\Emprunt::class, 'id_utilisateur');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     **/
    public function gestionnaire()
    {
        return $this->hasOne(\App\Models\Gestionnaire::class);
    }
}
