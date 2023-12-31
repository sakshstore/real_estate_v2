<?php

namespace App\Models;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Faq
 *
 * @property $id
 * @property $question
 * @property $answer
 * @property $category
 * @property $user_id
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Faq extends Model
{
    use SoftDeletes;
    
    
    static $rules = [
		'question' => 'required',
		'tags' => 'required',
		'user_id' => 'required',
    ];

    protected $perPage = 20;
    
        protected $dates = ['deleted_at'];
        

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['question','answer','tags','user_id'];



}
