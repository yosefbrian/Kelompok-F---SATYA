<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Daftarkuis extends Model
{
    protected $table = 'daftarkuis';
    protected $fillable  = ['name', 'level', 'bahasa'];

    public function pertanyaan()
	{
		return $this->hasMany('App\Pertanyaan','kuis_id');
	}
	public function level()
	{
		return $this->hasMany('App\Pertanyaan','level');
	}
	public function bahasa()
	{
		return $this->hasMany('App\Pertanyaan','bahasa');
	}
}
