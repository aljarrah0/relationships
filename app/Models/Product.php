<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Product extends Model
{
    use HasFactory;

    // reverse many-to-many relationship
    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class);
        // return $this->belongsToMany(User::class, 'product_user', 'product_id', 'user_id');
    }
}
