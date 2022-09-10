<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Appointment
 *
 * @property $id
 * @property $office_id
 * @property $workshop_id
 * @property $owner_id
 * @property $date
 * @property $time
 * @property $created_at
 * @property $updated_at
 *
 * @property Office $office
 * @property Owner $owner
 * @property Workshop $workshop
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Appointment extends Model
{
    
    static $rules = [
		'office_id' => 'required',
		'workshop_id' => 'required',
		'owner_id' => 'required',
		'date' => 'required',
		'time' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['office_id','workshop_id','owner_id','date','time'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function office()
    {
        return $this->hasOne('App\Models\Office', 'id', 'office_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function owner()
    {
        return $this->hasOne('App\Models\Owner', 'id', 'owner_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function workshop()
    {
        return $this->hasOne('App\Models\Workshop', 'id', 'workshop_id');
    }
    

}
