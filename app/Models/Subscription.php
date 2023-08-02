<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Subscription
 *
 * @property $id
 * @property $name
 * @property $amount
 * @property $currency
 * @property $property_submission
 * @property $featured_property
 * @property $top_property
 * @property $urgent_property
 * @property $line_1
 * @property $line_2
 * @property $line_3
 * @property $line_4
 * @property $user_id
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Subscription extends Model
{
    
    static $rules = [
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','amount','currency','property_submission','featured_property','top_property','urgent_property','line_1','line_2','line_3','line_4','user_id'];



}
