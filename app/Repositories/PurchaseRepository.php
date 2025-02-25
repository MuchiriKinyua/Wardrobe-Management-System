<?php

namespace App\Repositories;

use App\Models\Purchase;
use App\Repositories\BaseRepository;

class PurchaseRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'user_id',
        'clothing_item_id',
        'price',
        'purchased_at',
        'store'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Purchase::class;
    }
}
