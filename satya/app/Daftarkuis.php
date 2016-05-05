<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Daftarkuis extends Model
{
    protected $table = 'daftarkuis';
    protected $fillable  = ['nama', 'level', 'bahasa'];

    public function pertanyaan()
	{
		return $this->hasMany('App\Pertanyaan','kuis_id');
	}
}
