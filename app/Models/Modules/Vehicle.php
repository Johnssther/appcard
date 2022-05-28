<?php

namespace App\Models\Modules;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;


    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'vehicles';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'model', 'maximum_power', 'maximum_torque', 'fuel_type', 'color', 'brand', 'value', 
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
    * Get Vehicles
    */
    public static function getVehicles()
    {
        $query = self::query();
        $query->orderby('model', 'asc');
        $collection = $query->pluck('model', 'id');

        $collection->prepend('', '');
        return $collection;
    }

    /**
     * Function for validate data.
     */
    public function isValid($request, $data)
    {
        $rules = [
            'model' => 'required',
            'maximum_power' => 'required',
            'maximum_torque' => 'required',
            'fuel_type' => 'required',
            'color' => 'required',
            'brand' => 'required',
        ];
        $request->validate($rules);
        return true;
    }
}
