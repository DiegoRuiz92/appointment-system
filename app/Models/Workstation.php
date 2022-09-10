<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Workstation
 *
 * @property $id
 * @property $name
 * @property $technician
 * @property $area
 * @property $created_at
 * @property $updated_at
 *
 * @property Workshop[] $workshops
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Workstation extends Model
{
    
    static $rules = [
		'name' => 'required',
		'area' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','technician','area'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function workshops()
    {
        return $this->hasMany('App\Models\Workshop', 'workstation_id', 'id');
    }
    

}
