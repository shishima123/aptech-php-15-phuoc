<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public $timestamps = false; /*xoa 2 collum mac dinh updated_at / created_at cua laravel*/
}
