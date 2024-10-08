<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Book extends Model
{
    use HasFactory;

    protected $guarded = [
        "id",
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function reviews()
{
    return $this->hasMany(Review::class);
}
    public function comments()
    {
    return $this->hasMany(Comment::class);
    }

}
