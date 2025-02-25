<?php

namespace App\Repositories;

use App\Models\days;
use App\Repositories\BaseRepository;

class daysRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'monday',
        'tuesday',
        'wednesday',
        'thursday',
        'friday',
        'saturday',
        'sunday'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return days::class;
    }
}
