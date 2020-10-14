<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mata_kuliah extends Model
{
        protected $table = 'mata_kuliah';
    protected $fillable = ['nama_matkul', 'kode_matkul', 'semester'];

    public function Mahasiswa(){
    	return $this -> belongsToMany(mahasiswa::class)->withPivot(['nilai']);
    }
}
