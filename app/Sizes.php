<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sizes extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'sizes';

    protected $fillable = ['number', 'style'];
}
