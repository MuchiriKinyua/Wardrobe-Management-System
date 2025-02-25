<?php

namespace App\Repositories;

use App\Models\History;
use App\Repositories\BaseRepository;

class HistoryRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'clothing_item_id'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return History::class;
    }
}
