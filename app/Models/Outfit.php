<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Outfit extends Model
{
    public $table = 'outfits';

    public $fillable = [
        'user_id',
        'full_name'
    ];

    protected $casts = [
        'full_name' => 'string'
    ];

    public static array $rules = [
        'user_id' => 'nullable',
        'full_name' => 'nullable|string|max:100',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    public function user(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\User::class, 'user_id');
    }
}
