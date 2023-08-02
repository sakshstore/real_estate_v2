<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class BulkMessage
 *
 * @property $id
 * @property $content
 * @property $plateforms
 * @property $delivery_time
 * @property $status
 * @property $user_id
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class BulkMessage extends Model
{
    
    static $rules = [
		'status' => 'required',
		'user_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['content','plateforms','scheduled_at','status','user_id'];



}
