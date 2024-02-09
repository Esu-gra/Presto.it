<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable=
    [
        'name'
    ];

    // Definizione della relazione con Article (1 a N)
    public function articles()
    {
        return $this->hasMany(Article::class);
    }

    
}
