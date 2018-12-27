<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $table = 'ticket';

    protected $fillable = ['name', 'design'];

    public function event() {
    	return $this->hasOne('App\Event', 'ticket_id');
    }
}
