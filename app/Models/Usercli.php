<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Usercli
 * @package App\Models
 * @version December 19, 2021, 6:12 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $pedidos
 * @property string $name
 * @property string $celular
 * @property string $email
 * @property string|\Carbon\Carbon $email_verified_at
 * @property string $password
 * @property string $remember_token
 */
class Usercli extends Model
{

    public $table = 'usercli';
    
    public $timestamps = false;



    protected $primaryKey = 'idusercli';

    public $fillable = [
        'name',
        'celular',
        'email',
        'email_verified_at',
        'password',
        'remember_token'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'idusercli' => 'integer',
        'name' => 'string',
        'celular' => 'string',
        'email' => 'string',
        'email_verified_at' => 'datetime',
        'password' => 'string',
        'remember_token' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required|string|max:255',
        'celular' => 'nullable|string|max:45',
        'email' => 'required|string|max:255',
        'email_verified_at' => 'nullable',
        'password' => 'required|string|max:255',
        'remember_token' => 'nullable|string|max:100'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function pedidos()
    {
        return $this->hasMany(\App\Models\Pedido::class, 'idusercli');
    }
}
