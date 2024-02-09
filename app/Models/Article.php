<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable=
    [
        'name',
        'price',
        'user_id',
        'category_id',
        'description'

    ];

    // Definizione della relazione con Category (1 a N)
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // Definizione della relazione con User (1 a N)
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
