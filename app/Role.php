<?php

namespace Users;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'roles';

    protected $fillable = [
        'name', 'display_name', 'description',
    ];

    public function users()
    {
      # code...
      return $this->belongsToMany('Users\User');
    }

    public function permissions()
    {
      # code...
      return $this->belongsToMany('Users\Permission');
    }
}
