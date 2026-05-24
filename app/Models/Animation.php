<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Animation extends Model
{
    protected $fillable = [
        'country_id', 'title', 'genre', 'year',
        'rating', 'box_office', 'synopsis', 'poster_url', 'is_recommended'
    ];

    protected $casts = [
        'is_recommended' => 'boolean',
        'rating'         => 'float',
        'box_office'     => 'float',
        'year'           => 'integer',
    ];

    /**
     * Relasi: Film milik satu Negara (belongsTo)
     */
    public function country()
    {
        return $this->belongsTo(Country::class);
    }
}
