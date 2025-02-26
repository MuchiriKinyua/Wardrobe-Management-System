<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    public $table = 'logs';

    protected $fillable = [
        'user_id',
        'item_id',
        'category',
        'action',
        'description',
        'table_name'
    ];

    protected $casts = [
        'category' => 'string',
        'action' => 'string',
        'description' => 'string',
        'table_name' => 'string'
    ];

    public function user()
    {
        return $this->belongsTo(\App\Models\User::class, 'user_id');
    }

    public function item()
    {
        return $this->belongsTo(\App\Models\Item::class, 'item_id');
    }
}

