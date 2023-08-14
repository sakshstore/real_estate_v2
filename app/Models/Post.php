<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use CyrildeWit\EloquentViewable\InteractsWithViews;
use CyrildeWit\EloquentViewable\Contracts\Viewable;
/**
 * Class Post
 *
 * @property $id
 * @property $title
 * @property $content
 * @property $thumbnail
 * @property $user_id
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Post extends Model implements Viewable
{
      use InteractsWithViews;
      
      
    static $rules = [
		'title' => 'required',
		'user_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['title','content','thumbnail','tags','user_id','status'];



    public function user()
    {
        return $this->belongsTo( User::class,'user_id');
    }
}
