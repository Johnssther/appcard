<?php

namespace App\Models\Modules;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    use HasFactory;


    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'sales';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'seller_id', 'customer_id', 'vehicle_id', 'name_customer', 'surname_customer', 'name_seller', 'surname_seller', 'comments',
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
     * Function for validate data.
     */
    public function isValid($request, $data)
    {
        $rules = [
            'comments' => 'required',
        ];
        $request->validate($rules);
        return true;
    }

    /**
     *  Get all seller of the asignam
     */
    public function seller()
    {
        return $this->hasOne('App\Models\Modules\Seller', 'id', 'seller_id');
    }

    /**
     *  Get all customer of the asignam
     */
    public function customer()
    {
        return $this->hasOne('App\Models\Modules\Customer', 'id', 'seller_id');
    }

    /**
     *  Get all vehicle of the asignam
     */
    public function vehicle()
    {
        return $this->hasOne('App\Models\Modules\Vehicle', 'id', 'seller_id');
    }
}
