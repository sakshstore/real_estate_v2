<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Vendor
 *
 * @property $id
 * @property $name
 * @property $email
 * @property $company_name
 * @property $registeration_number
 * @property $phone
 * @property $mobile
 * @property $date_of_birth
 * @property $address
 * @property $city
 * @property $state
 * @property $country
 * @property $pin
 * @property $referral
 * @property $selected_plan
 * @property $annual_earning
 * @property $total_experience
 * @property $timezone
 * @property $avatar
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Vendor extends Model
{
    
    static $rules = [
		'name' => 'required',
		'email' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','email','company_name','registeration_number','phone','mobile','date_of_birth','address','city','state','country','pin','referral','selected_plan','annual_earning','total_experience','timezone','avatar','user_id'];



}
