<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    public function User()
    {
        return $this->beLongsTo('App\User', 'user_id');
    }
    protected $fillable = ['phone_number', 'user_id'];

}
