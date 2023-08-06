<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class AutoPost
 *
 * @property $id
 * @property $keywords
 * @property $category
 * @property $tags
 * @property $schedule_at
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class AutoPost extends Model
{
    
    static $rules = [
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['keywords','category','status','post_id','tags','scheduled_at'];



}
