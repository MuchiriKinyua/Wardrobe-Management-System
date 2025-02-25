<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Favorite extends Model
{
    public $table = 'favorites';

    public $fillable = [
        'clothing_item_id'
    ];

    protected $casts = [
        
    ];

    public static array $rules = [
        'clothing_item_id' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    public function clothingItem(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\Item::class, 'clothing_item_id');
    }
}
