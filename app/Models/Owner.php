<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Owner
 *
 * @property $id
 * @property $document
 * @property $document_id
 * @property $firstname
 * @property $middlename
 * @property $lastname
 * @property $second_lastname
 * @property $mobile
 * @property $email
 * @property $license
 * @property $brand
 * @property $line
 * @property $model
 * @property $created_at
 * @property $updated_at
 *
 * @property Appointment[] $appointments
 * @property Document $document
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Owner extends Model
{
    
    static $rules = [
		'document' => 'required',
		'document_id' => 'required',
		'firstname' => 'required',
		'lastname' => 'required',
		'mobile' => 'required',
		'email' => 'required',
		'license' => 'required',
		'brand' => 'required',
		'line' => 'required',
		'model' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['document','document_id','firstname','middlename','lastname','second_lastname','mobile','email','license','brand','line','model'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function appointments()
    {
        return $this->hasMany('App\Models\Appointment', 'owner_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function document()
    {
        return $this->hasOne('App\Models\Document', 'id', 'document_id');
    }
    

}
