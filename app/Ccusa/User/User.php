<?php

namespace App\Ccusa\User;

use App\Ccusa\Core\Entity;
use Illuminate\Auth\Authenticatable;;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;

class User extends Entity implements AuthenticatableContract
{
    use Authenticatable;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['username', 'password'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];
}
