<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Images extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'images';

    protected $fillable = ['size_id'];

    /**
     * Get images that owns the sizes .
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function sizes()
    {
        return $this->belongsTo('App\Sizes', 'size_id');
    }

}
