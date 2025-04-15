<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProductFeature extends Model
{
    protected $fillable = ['product_data_id', 'feature'];

    public function productData(): BelongsTo
    {
        return $this->belongsTo(ProductData::class);
    }
}
