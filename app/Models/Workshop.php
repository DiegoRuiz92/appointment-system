<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Workshop
 *
 * @property $id
 * @property $name
 * @property $address
 * @property $cost_center
 * @property $workstation_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Appointment[] $appointments
 * @property Workstation $workstation
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Workshop extends Model
{
    
    static $rules = [
		'name' => 'required',
		'address' => 'required',
		'cost_center' => 'required',
		'workstation_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','address','cost_center','workstation_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function appointments()
    {
        return $this->hasMany('App\Models\Appointment', 'workshop_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function workstation()
    {
        return $this->hasOne('App\Models\Workstation', 'id', 'workstation_id');
    }
    

}
