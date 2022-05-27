<?php

namespace App\Models;

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
     * Function for validate data.
     */
    public function isValid($data)
    {
        $rules = [
            'name' => 'required',
            'surname' => 'required',
            "telephone" => "required",
            "direction" => "required",
            "email" => "required",
        ];

        if ($this->exists) {
            $data['nit'] .= ",nit,{$this->id}";
        }

        $validator = Validator::make($data, $rules);
        if ($validator->passes()) {
            return true;
        }
        $this->errors = $validator->errors();
        return false;
    }

    /**
     * Get all sellers for the customer
     */

    // public function sellers()
    // {
    //     return $this->belongsToMany('App\Models\Admin\Seller', 'customers_sellers', 'customer_id', 'seller_id');
    // }
}
