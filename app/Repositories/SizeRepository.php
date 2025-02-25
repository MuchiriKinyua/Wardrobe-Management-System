<?php

namespace App\Repositories;

use App\Models\Size;
use App\Repositories\BaseRepository;

class SizeRepository extends BaseRepository
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
        return Size::class;
    }
}
