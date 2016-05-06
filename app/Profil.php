<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profil extends Model
{
    

	protected $table = 'profil';
    protected $fillable  = ['nama','poin'];

    public function profil()
	{
		return $this->belongsTo('App\User','user_id');
	}
}
