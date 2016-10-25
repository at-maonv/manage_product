<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customers extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table= 'customers';

    protected $fillable = ['last_name', 'first_name','email','email', 'password','phone','city', 'province','country','image_url','date_of_birth'];
}
