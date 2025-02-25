<?php

namespace App\Repositories;

use App\Models\Item;
use App\Repositories\BaseRepository;

class ItemRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'user_id',
        'category_id',
        'full_name',
        'color',
        'size',
        'brand',
        'material',
        'image'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Item::class;
    }
}
