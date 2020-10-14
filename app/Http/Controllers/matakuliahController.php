<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class matakuliahController extends Controller
{
    public function index(){
    	$data_matkul = \App\mata_kuliah::all();
    	return view('mataKuliah',['data_matkul' => $data_matkul]);
    }

    public function create(Request $request){
    	\App\mata_kuliah::create($request -> all());
    	return redirect('matkul');

    }

    public function delete($id) {
    	$matkul =\App\mata_kuliah::find($id);
    	$matkul -> delete($matkul);
    	return redirect('matkul');
    }
}
