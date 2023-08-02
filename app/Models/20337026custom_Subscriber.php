<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Subscriber
 *
 * @property $id
 * @property $name
 * @property $email
 * @property $whatsapp
 * @property $calls
 * @property $status
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Subscriber extends Model
{
    
    static $rules = [
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','email','whatsapp','calls','status'];



}
