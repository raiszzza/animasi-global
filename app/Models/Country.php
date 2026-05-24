<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $fillable = ['name', 'flag_emoji'];

    /**
     * Relasi: Negara memiliki banyak Film (hasMany)
     */
    public function animations()
    {
        return $this->hasMany(Animation::class);
    }
}
