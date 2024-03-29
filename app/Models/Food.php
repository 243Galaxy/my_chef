<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    use HasFactory;

    function category() {
        return $this->belongsTo(Category::class, 'category_id');
    }

    function recipe() {
        return $this->belongsTo(Recipe::class, 'food_id');
    }
}
