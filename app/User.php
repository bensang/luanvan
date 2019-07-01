<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $table = 'user';
    public $timestamps = false;
    protected $fillable = [ 'usertype_id', 'email', 'pass', 'name', 'phone','remember_token' ];
}
