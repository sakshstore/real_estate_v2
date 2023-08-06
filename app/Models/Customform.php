<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Customform
 *
 * @property $id
 * @property $form_name
 * @property $form_type
 * @property $form_submits
 * @property $form_json
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Customform extends Model
{
    
    static $rules = [
		'form_name' => 'required',
		'form_type' => 'required',
		'form_submits' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['form_name','form_type','form_submits','form_json'];



}
