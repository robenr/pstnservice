<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $fillable = ['created_by', 'trello_id', 'name', 'trello_url'];
}
