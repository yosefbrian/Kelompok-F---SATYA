<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pertanyaan extends Model
{
    protected $table = 'pertanyaan';
    protected $fillable  = ['pertanyaan','jawaban', 'gambar'];

    public function kuis()
	{
		return $this->belongsTo('App\Daftarkuis','kuis_id');
	}
}
