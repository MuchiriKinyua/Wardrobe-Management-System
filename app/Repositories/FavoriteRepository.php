<?php

namespace App\Repositories;

use App\Models\Favorite;
use App\Repositories\BaseRepository;

class FavoriteRepository extends BaseRepository
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
        return Favorite::class;
    }
}
