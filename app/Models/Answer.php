<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'answers';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['content', 'attachment', 'category', 'user_id', 'ticket_id'];

    public function user()
    {
        return $this->belongsTo( User::Class);
    }
    public function ticket()
    {
        return $this->belongsTo(  Ticket::Class);
    }
    
}
