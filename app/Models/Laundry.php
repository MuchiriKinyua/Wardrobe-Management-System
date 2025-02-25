<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Laundry extends Model
{
    public $table = 'laundries';

    public $fillable = [
        'user_id',
        'clothing_item_id',
        'washed_at',
        'detergent_used',
        'notes'
    ];

    protected $casts = [
        'washed_at' => 'datetime',
        'detergent_used' => 'string',
        'notes' => 'string'
    ];

    public static array $rules = [
        'user_id' => 'nullable',
        'clothing_item_id' => 'nullable',
        'washed_at' => 'nullable',
        'detergent_used' => 'nullable|string|max:100',
        'notes' => 'nullable|string|max:600',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    public function clothingItem(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\Item::class, 'clothing_item_id');
    }

    public function user(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\User::class, 'user_id');
    }
}
