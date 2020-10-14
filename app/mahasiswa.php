<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mahasiswa extends Model
{
    protected $table = 'mahasiswa';
    protected $fillable = ['nama', 'npm', 'jenis_kelamin', 'alamat', 'email'];

    public function MataKuliah()
    {
    	return $this->belongsToMany(mata_kuliah::class)->withPivot(['nilai']);
    }
}
