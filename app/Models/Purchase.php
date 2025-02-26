<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    public $table = 'purchases';

    public $fillable = [
        'user_id',
        'clothing_item_id',
        'price',
        'purchased_at',
        'store'
    ];

    protected $casts = [
        'price' => 'string',
        'purchased_at' => 'string',
        'store' => 'string'
    ];

    public static array $rules = [
        'user_id' => 'nullable',
        'clothing_item_id' => 'nullable',
        'price' => 'nullable|string|max:100',
        'purchased_at' => 'nullable|string|max:100',
        'store' => 'nullable|string|max:100',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    public function item()
    {
        return $this->belongsTo(Item::class, 'clothing_item_id');
    }

    public function user(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\User::class, 'user_id');
    }
}
