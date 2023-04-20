<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 
        'slug', 
        'post', 
        'user_id', 
        'category_id' 
    ];

    public function user()
    {
        $this->BelongsTo(User::class);
    }

    public function category()
    {
        $this->BelongsTo(category::class);
    }
    
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
}
