<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public function role_relation()
    {
        return $this->belongsTo('App\User' , 'role_id');
    }
}
