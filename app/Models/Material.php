<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    public $table = 'materials';

    public $fillable = [
        'full_name'
    ];

    protected $casts = [
        'full_name' => 'string'
    ];

    public static array $rules = [
        'full_name' => 'nullable|string|max:100',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
