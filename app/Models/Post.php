<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    use HasFactory;

    // reverse one-to-many relationship
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
        // return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
