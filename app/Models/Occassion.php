<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Occassion extends Model
{
    public $table = 'occassions';

    public $fillable = [
        'full_name'
    ];

    protected $casts = [
        'full_name' => 'string'
    ];

    public static array $rules = [
        'full_name' => 'nullable|string|max:100',
        'created_at' => 'required',
        'updated_at' => 'required'
    ];

    
}
