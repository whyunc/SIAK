<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mahasiswaController extends Controller
{
    public function index() {

    	$data_mahasiswa = \App\mahasiswa::paginate(2);
    	return view('mahasiswaTMP', ['data_mahasiswa' => $data_mahasiswa]);
    }

    public function create(Request $request) {

    	\App\mahasiswa::create($request -> all());
    	return redirect('mahasiswa');
    }

    public function delete($id){
    	$mahasiswa = \App\mahasiswa::find($id);
    	$mahasiswa -> delete($mahasiswa);
    	return redirect('mahasiswa');
    }

    public function detail($id){
    	$mahasiswa = \App\mahasiswa::find($id);
    	return view('detailMahasiswa', ['mahasiswa' => $mahasiswa]);
    }
}
