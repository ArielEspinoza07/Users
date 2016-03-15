<?php

namespace Users;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{

  protected $table = 'users';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'username', 'email', 'password',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function setPasswordAttribute($valor){
        if(!empty($valor)){
            $this->attributes['password'] = \Hash::make($valor);
        }
    }

    public function roles()
    {
      # code...
      return $this->belongsToMany('Users\Role');
    }

}
