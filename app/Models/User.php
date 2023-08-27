<?php

namespace App\Models;

  use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
 
use Spatie\Permission\Traits\HasRoles;
use Spatie\Tags\HasTags;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\hasOne;
use App\Models\Post;
use App\Models\Subscriber;
use App\Models\LoginHistory;

use Illuminate\Database\Eloquent\Relations\HasOneThrough; 

class User extends Authenticatable  implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable  , HasRoles , HasTags; 

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name','username',
        'email',
        'last_login_at',
        'last_login_ip','form_json','mobile',
        'password', 'subscription_id'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    
    
    
    
        public function posts(): HasMany
    {
        return $this->hasMany(Post::class);
    }
    
    
    
    
        public function properties(): HasMany
    {
        return $this->hasMany(Property::class,"broker_id");
    }
    
    
        public function orders(): HasMany
    {
        return $this->hasMany(Order::class,"broker_id");
    }
    
    
    
    
    
    
        public function  login_histories(): HasMany
    {
        return $this->hasMany(LoginHistory::class );
    }
     
    
        public function subscription(): HasOne
    {
        return $this->hasOne(Subscription::class);
    }
    
    
}
