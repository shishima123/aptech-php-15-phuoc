<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public function Phone()
    {
        return $this->hasOne('App\Phone', 'user_id');

    }

}
