<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public $table = 'tags';

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
        'created_at' => 'required',
        'updated_at' => 'required'
    ];

    public function user(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\User::class, 'user_id');
    }
}
