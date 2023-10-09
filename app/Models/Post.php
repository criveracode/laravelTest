<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    /*
     * MUTATORS
     */

    // alteramos el nombre a minuscula
    public function setNameAttribute($value)
    {
        $this->attributes['name'] = strtolower($value);
    }
    
    /*
     * ACCESSOR
     */

    //convertimos el nombre en url amigable(slug)
    public function getSlugAttribute()
    {
        return str_replace(' ', '-', $this->name);
    }

    //retornamos un parametro, agregando su slug.
    public function href()
    {
        return "blog/{$this->slug}";
    }
}
