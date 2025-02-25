<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    public $table = 'items';

    public $fillable = [
        'user_id',
        'category_id',
        'cloth_name',
        'color',
        'size',
        'brand_id',
        'condition',
        'day',
        'image'
    ];

    protected $casts = [
        'cloth_name' => 'string',
        'color' => 'string',
        'size' => 'string',
        'brand_id' => 'integer',
        'material' => 'string',
        'condition' => 'string',
        'day' => 'string',
        'image' => 'string'
    ];

    public static array $rules = [
        'user_id' => 'nullable',
        'category_id' => 'nullable',
        'cloth_name' => 'nullable|string|max:100',
        'color' => 'nullable|string|max:100',
        'size' => 'nullable|string|max:100',
        'brand_id' => 'nullable|string|max:100',
        'condition' => 'nullable|string|max:100',
        'day' => 'nullable',
        'image' => 'nullable|string|max:255',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    public function category(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\Category::class, 'category_id');
    }

    public function user(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\User::class, 'user_id');
    }

    public function favorites(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(\App\Models\Favorite::class, 'clothing_item_id');
    }

    public function histories(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(\App\Models\History::class, 'clothing_item_id');
    }

    public function laundries(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(\App\Models\Laundry::class, 'clothing_item_id');
    }

    public function purchases(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(\App\Models\Purchase::class, 'clothing_item_id');
    }
}
