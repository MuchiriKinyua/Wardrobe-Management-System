<?php

namespace App\Repositories;

use App\Models\Occassion;
use App\Repositories\BaseRepository;

class OccassionRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'full_name'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Occassion::class;
    }
}
