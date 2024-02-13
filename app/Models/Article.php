<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Article extends Model
{
    use HasFactory;

    protected $fillable=
    [
        'name',
        'price',
        'user_id',
        'category_id',
        'description',
        

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

    public function reviews(): HasMany
    {
        return $this->hasMany(Review::class);
    }

    public function setAccepted($value)
    {
        $this->is_accepted = $value;
        $this->save();
        return true;
    }

    public static function toBeRevisionedCount()
    {
        return Article::where('is_accepted', null)->count();
    }
}
