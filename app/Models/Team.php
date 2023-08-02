<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Team
 *
 * @property $id
 * @property $full_name
 * @property $about
 * @property $instagram_url
 * @property $facebook_url
 * @property $linked_url
 * @property $whatsapp_number
 * @property $avatar
 * @property $user_id
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Team extends Model
{
    
    static $rules = [
		'full_name' => 'required',
		'user_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['full_name','about','instagram_url','facebook_url','linked_url','whatsapp_number','avatar','user_id'];



}
