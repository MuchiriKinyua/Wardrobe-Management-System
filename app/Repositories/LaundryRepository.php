<?php

namespace App\Repositories;

use App\Models\Laundry;
use App\Repositories\BaseRepository;

class LaundryRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'user_id',
        'clothing_item_id',
        'washed_at',
        'detergent_used',
        'notes'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Laundry::class;
    }
}
