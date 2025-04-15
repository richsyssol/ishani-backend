<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ProductData extends Model
{
    protected $fillable = [
        'category_id',
        'title',
        'description',
        'image',
        'price',
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function features(): HasMany
    {
        return $this->hasMany(ProductFeature::class);
    }
}
