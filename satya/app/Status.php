<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    protected $table = 'status';
    protected $fillable  = ['status'];

    public function profil()
	{
		return $this->belongsTo('App\User','user_id');
	}
}
