<?php

namespace App\Repositories;

use App\Models\Material;
use App\Repositories\BaseRepository;

class MaterialRepository extends BaseRepository
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
        return Material::class;
    }
}
