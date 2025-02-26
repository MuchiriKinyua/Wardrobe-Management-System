<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    public $table = 'histories';

    public $fillable = [
        'clothing_item_id',
        'notes'
    ];

    protected $casts = [
        
    ];

    public static array $rules = [
        'clothing_item_id' => 'nullable|exists:items,id',
        'notes' => 'nullable|string|max:600',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    public function item()
    {
        return $this->belongsTo(Item::class, 'clothing_item_id');
    }
}
