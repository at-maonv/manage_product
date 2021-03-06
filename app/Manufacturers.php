<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Manufacturers extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table= 'manufacturers';

    protected $fillable= ['name', 'address','phone'];
}
