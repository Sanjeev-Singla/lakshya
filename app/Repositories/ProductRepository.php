<?php

namespace App\Repositories;

use App\Models\Product;
use App\Repositories\BaseRepository;

/**
 * Class ProductRepository
 * @package App\Repositories
 * @version September 28, 2021, 6:03 pm UTC
*/

class ProductRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
        'descritpion',
        'currency',
        'price',
        'available_units',
        'is_active'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Product::class;
    }
}
