<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Office
 *
 * @property $id
 * @property $name
 * @property $created_at
 * @property $updated_at
 *
 * @property Appointment[] $appointments
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Office extends Model
{
    
    static $rules = [
		'name' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function appointments()
    {
        return $this->hasMany('App\Models\Appointment', 'office_id', 'id');
    }
    

}
