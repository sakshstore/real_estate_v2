<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Lead
 *
 * @property $id
 * @property $name
 * @property $email
 * @property $phone
 * @property $service_id
 * @property $user_id
 * @property $ip_address
 * @property $request_url
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Lead extends Model
{
    
    static $rules = [
		'name' => 'required',
		'email' => 'required',
		'phone' => 'required',
		'service_id' => 'required',
		'user_id' => 'required',
		'ip_address' => 'required',
		'request_url' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','email','phone','service_id','user_id','ip_address','request_url','timezone','refer'];



}
