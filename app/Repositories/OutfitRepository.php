<?php

namespace App\Repositories;

use App\Models\Outfit;
use App\Repositories\BaseRepository;

class OutfitRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'user_id',
        'full_name'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Outfit::class;
    }
}
