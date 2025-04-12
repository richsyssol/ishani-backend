<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WhoWeAre extends Model
{
    use HasFactory;

    protected $fillable = [
        'years_experience',
        'projects_completed',
        'section_header',
        'text_content',
        'section_image',
        'is_active'
    ];

    protected $casts = [
        'is_active' => 'boolean'
    ];
}