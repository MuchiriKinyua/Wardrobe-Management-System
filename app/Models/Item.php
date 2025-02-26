<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

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
        'material_id',
        'condition_id',
        'day',
        'image'
    ];

    protected $casts = [
        'cloth_name' => 'string',
        'color' => 'string',
        'size' => 'string',
        'brand_id' => 'integer',
        'material_id' => 'integer',
        'condition_id' => 'integer',
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
        'material_id' => 'nullable|string|max:100',
        'condition_id' => 'nullable|integer|max:100',
        'day' => 'nullable',
        'image' => 'nullable|string|max:255',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    protected static function boot()
    {
        parent::boot();

        static::created(function ($item) {
            Log::create([
                'user_id' => Auth::id(),
                'item_id' => $item->id,
                'category' => 'Add',
                'action' => 'Added new item',
                'description' => 'Item created: ' . $item->cloth_name,
                'table_name' => 'items',
            ]);
        });

        static::updated(function ($item) {
            Log::create([
                'user_id' => Auth::id(),
                'item_id' => $item->id,
                'category' => 'Update',
                'action' => 'Updated item',
                'description' => 'Item updated: ' . $item->cloth_name,
                'table_name' => 'items',
            ]);
        });

        static::deleted(function ($item) {
            Log::create([
                'user_id' => Auth::id(),
                'item_id' => $item->id,
                'category' => 'Delete',
                'action' => 'Deleted item',
                'description' => 'Item deleted: ' . $item->cloth_name,
                'table_name' => 'items',
            ]);
        });
    }

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

    public function brand()
    {
        return $this->belongsTo(Brand::class, 'brand_id');
    }

    public function material()
    {
        return $this->belongsTo(Material::class, 'material_id');
    }

    public function condition()
    {
        return $this->belongsTo(Condition::class, 'condition_id');
    }
}
