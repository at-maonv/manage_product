<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Distributors extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'distributors';

    protected $fillable = ['name', 'address','phone'];
}
