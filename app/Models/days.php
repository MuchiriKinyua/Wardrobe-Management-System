<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class days extends Model
{
    public $table = 'days';

    public $fillable = [
        'monday',
        'tuesday',
        'wednesday',
        'thursday',
        'friday',
        'saturday',
        'sunday'
    ];

    protected $casts = [
        'monday' => 'string',
        'tuesday' => 'string',
        'wednesday' => 'string',
        'thursday' => 'string',
        'friday' => 'string',
        'saturday' => 'string',
        'sunday' => 'string'
    ];

    public static array $rules = [
        'monday' => 'required|string|max:255',
        'tuesday' => 'required|string|max:255',
        'wednesday' => 'required|string|max:255',
        'thursday' => 'required|string|max:255',
        'friday' => 'required|string|max:255',
        'saturday' => 'required|string|max:255',
        'sunday' => 'required|string|max:255'
    ];

    
}
