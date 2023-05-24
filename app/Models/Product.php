<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Product extends Model
{
    use HasFactory;

    public function pictureUrl(){
        return Storage::disk('public')->url($this->picture);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }
}
