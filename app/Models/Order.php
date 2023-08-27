<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    
     protected $fillable = [
        'payment_id','payment_gateway',
        'broker_id',        'amount', 'currency',
        'subscription_id',
        'pg_request_dump','payment_status' 
    ];
    
    
       public function broker()
    {
        return $this->belongsTo( User::class,'broker_id');
    }
    
    
       public function subscription()
    {
        return $this->belongsTo( Subscription::class,'subscription_id');
    }
    
}
 