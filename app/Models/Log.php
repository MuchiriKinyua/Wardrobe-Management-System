<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    public $table = 'logs';

    public $fillable = [
        'user_id',
        'action',
        'table_name'
    ];

    protected $casts = [
        'action' => 'string',
        'table_name' => 'string'
    ];

    public static array $rules = [
        'user_id' => 'nullable',
        'action' => 'nullable|string|max:100',
        'table_name' => 'nullable|string|max:100',
        'created_at' => 'required',
        'updated_at' => 'required'
    ];

    public function user(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\User::class, 'user_id');
    }
}
