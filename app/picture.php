<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class picture extends Model
{
    public $timestamps = false;
    protected $fillable = ['name', 'image'];
}