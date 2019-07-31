<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class FileManager extends Model
{
    protected $fillable = ['title', 'filename', 'mimetype', 'location', 'uploaded_by'];

    public function uploaded_user()
    {
    	return $this->belongsTo(User::class, 'uploaded_by', 'id');
    }
}
