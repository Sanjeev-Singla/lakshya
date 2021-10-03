<?php

namespace App\Models;

use Eloquent as Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Product
 * @package App\Models
 * @version September 28, 2021, 6:03 pm UTC
 *
 * @property string $title
 * @property string $descritpion
 * @property string $currency
 * @property integer $price
 * @property integer $available_units
 * @property tinyInteger $is_active
 */
class Product extends Model
{

    use HasFactory;

    public $table = 'products';
    



    public $fillable = [
        'title',
        'descritpion',
        'currency',
        'price',
        'available_units',
        'is_active'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'title' => 'string',
        'descritpion' => 'string',
        'currency' => 'string',
        'price' => 'integer',
        'available_units' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'title' => 'required|alpha|max:255|min:3',
        'descritpion' => 'nullable|alpha',
        'currency' => 'required|max:50',
        'price' => 'required|digits_between:1,6',
        'available_units' => 'required|digits_between:1,6'
    ];

    
}
