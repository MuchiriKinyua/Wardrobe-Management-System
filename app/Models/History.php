<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    public $table = 'histories';

    public $fillable = [
        'clothing_item_id'
    ];

    protected $casts = [
        
    ];

    public static array $rules = [
        'clothing_item_id' => 'nullable',
        'created_at' => 'required',
        'updated_at' => 'required'
    ];

    public function clothingItem(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\Item::class, 'clothing_item_id');
    }
}
