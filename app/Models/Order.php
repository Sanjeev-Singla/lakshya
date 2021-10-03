<?php

namespace App\Models;

use Eloquent as Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Order
 * @package App\Models
 * @version October 2, 2021, 2:59 pm UTC
 *
 * @property \App\Models\User $user
 * @property \App\Models\Product $product
 * @property integer $user_id
 * @property integer $product_id
 * @property tinyInteger $status
 */
class Order extends Model
{

    use HasFactory;

    public $table = 'orders';
    



    public $fillable = [
        'user_id',
        'product_id',
        'status'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'user_id' => 'integer',
        'product_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }
}
