<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Colors extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'colors';

    protected $fillable = ['name'];
}
