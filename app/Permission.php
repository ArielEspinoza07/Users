<?php

namespace Users;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
  protected $table = 'Permissions';

  protected $fillable = [
      'name', 'display_name', 'description',
  ];

  public function roles()
  {
    # code...
    return $this->belongsToMany('Users\Role');
  }
}
