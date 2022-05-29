<?php

namespace App\Models\Modules;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seller extends Model
{
    use HasFactory;


    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'sellers';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','surname','telephone','direction','email','company','identification_card',
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
     * Get Sellers
    */
    public static function getSellers()
    {
        $query = self::query();
        $query->where('active', true);
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
            'company' => 'required',
            'identification_card' => 'required',
        ];
        $request->validate($rules);
        return true;
    }

    public function sales()
    {
        return $this->hasMany('App\Models\Modules\Sale', 'seller_id', 'id');
    }
}
