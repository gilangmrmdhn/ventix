<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\SearchTrait;

class Event extends Model
{
	use SearchTrait;
    protected $table = 'event';

    protected $fillable = ['name', 'desc', 'date', 'price', 'author', 'email', 'hp', 'pamflet', 'ticket_id', 'status'];

    public function ticket() {
    	return $this->belongsTo('App\Ticket', 'ticket_id');
    }
}
