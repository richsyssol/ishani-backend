<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogPost extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'slug', 'excerpt', 'content', 'category', 
        'image_url', 'published_date', 'author_name',
        'author_avatar', 'author_role', 'related_products'
    ];

    protected $casts = [
        'published_date' => 'date',
        'related_products' => 'array'
    ];
}
