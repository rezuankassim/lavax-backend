<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Support\Facades\Storage;

class Product extends Model
{
    use HasFactory;

    protected $guarded = [];

    /**
     * Get the product's price.
     *
     * @return \Illuminate\Database\Eloquent\Casts\Attribute
     */
    protected function price(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => $value ? $value / 100 : null,
            set: fn ($value) => $value * 100,
        );
    }

    /**
     * Get the product's image url
     * 
     * @return \Illuminate\Database\Eloquent\Casts\Attribute
     */
    protected function photoUrl(): Attribute
    {
        return Attribute::make(
            get: fn ($value, $attribute) => Storage::url($attribute['photo']),
        );
    }

    public function carts(): BelongsToMany
    {
        return $this->belongsToMany(Cart::class)
            ->withPivot('quantity');
    }
}
