<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Category extends Model
{
    use HasFactory;

    public function childrenCategories(){
        return $this->hasMany(Category::class, 'parent_id');
    }

    public function pictureUrl(){
        return Storage::disk('public')->url($this->picture);
    }
}
