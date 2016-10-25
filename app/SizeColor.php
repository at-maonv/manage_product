<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SizeColor extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table= 'size_colors';

    protected $fillable= ['size_id', 'color_id'];

    /**
     * Get size-color that owns the sizes .
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function sizes()
    {
        return $this->belongsTo('App\Sizes', 'size_id');
    }

    /**
     * Get size-color that owns the colors .
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function colors()
    {
        return $this->belongsTo('App\Colors', 'color_id');
    }

}
