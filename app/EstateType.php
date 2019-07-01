<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EstateType extends Model
{
    protected $table = 'estate_type';
    public $timestamps = false;
    protected $fillable = ['id', 'name', 'type'];
}
