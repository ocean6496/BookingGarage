<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Customer
 * @package App\Models
 * @version April 8, 2019, 7:31 am UTC
 *
 * @property string fullname
 * @property string address
 * @property string phone
 * @property integer user_id
 * @property integer garage_id
 */
class Customer extends Model
{
    

    public $table = 'customers';
    

    


    public $fillable = [
        'fullname',
        'address',
        'phone',
        'user_id',
        'garage_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'fullname' => 'string',
        'address' => 'string',
        'phone' => 'string',
        'user_id' => 'integer',
        'garage_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'fullname' => 'required',
        'address' => 'required',
        'phone' => 'required',
        'user_id' => 'required',
        'garage_id' => 'required'
    ];

    
}
