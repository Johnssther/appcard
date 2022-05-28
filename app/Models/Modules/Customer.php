<?php

namespace App\Models\Modules;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Validator;

class Customer extends Model
{
    use HasFactory;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'customers';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'surname', 'email', 'telephone', 'direction'
    ];

    /**
     * The attributes that are mass boolean assignable.
     *
     * @var array
     */
    protected $boolean = [
        //
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        //
    ];

    /**
     * Get Customers
    */
    public static function getCustomers()
    {
        $query = self::query();
        $query->orderby('name', 'asc');
        $collection = $query->pluck('name', 'id');

        $collection->prepend('', '');
        return $collection;
    }

    /**
     * Function for validate data.
     */
    public function isValid($request, $data)
    {
        $rules = [
            'name' => 'required',
            'surname' => 'required',
            'telephone' => 'required',
            'direction' => 'required',
            'email' => 'required',
        ];
        $request->validate($rules);
        return true;
    }

    /**
     * Get all sellers for the customer
     */

    // public function sellers()
    // {
    //     return $this->belongsToMany('App\Models\Admin\Seller', 'customers_sellers', 'customer_id', 'seller_id');
    // }
}
