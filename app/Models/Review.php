<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Review extends Model
{
    use HasFactory;
    protected $fillable = [
        'review',
        'article_id',
        'user_id'
    ];

    public function article(): BelongsTo
    {
        return $this->belongsTo(Article::class);
    }
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
