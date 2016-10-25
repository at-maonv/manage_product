<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table= 'products';

    protected $fillable= ['name', 'desc', 'gender', 'category_id', 'manufacturer_id', 'distributor_id', 'price'];

    /**
     * Get products that owns the categories .
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function categories()
    {
        return $this->belongsTo('App\Categories', 'category_id');
    }

    /**
     * Get products that owns the manufacturers .
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function manufacturers()
    {
        return $this->belongsTo('App\Manufacturers', 'manufacturer_id');
    }

    /**
     * Get products that owns the distributors .
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function distributors()
    {
        return $this->belongsTo('App\Distributors', 'distributor_id');
    }
}
