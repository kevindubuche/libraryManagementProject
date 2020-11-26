<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

/**
 * Class User
 * @package App\Models
 * @version November 25, 2020, 5:52 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $emprunts
 * @property string $nom
 * @property string $prenom
 * @property string $email
 * @property string $password
 * @property boolean $is_paye
 * @property string $remenber_token
 * @property integer $role
 * @property string $statut_matrimonial
 * @property string $telephone
 * @property string $sexe
 */
class User extends Authenticatable
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
        'password',
        'is_paye',
        'remember_token',
        'role',
        'statut_matrimonial',
        'telephone',
        'sexe'
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
        'password' => 'string',
        'is_paye' => 'boolean',
        'remember_token' => 'string',
        'role' => 'integer',
        'statut_matrimonial' => 'string',
        'telephone' => 'string',
        'sexe' => 'string'
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
        'password' => 'required|string|max:255',
        'is_paye' => 'required|boolean',
        'remenber_token' => 'nullable|string|max:45',
        'role' => 'required|integer',
        'statut_matrimonial' => 'nullable|string|max:45',
        'telephone' => 'nullable|string|max:45',
        'sexe' => 'nullable|string|max:45',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function emprunts()
    {
        return $this->hasMany(\App\Models\Emprunt::class, 'id_utilisateur');
    }
}
