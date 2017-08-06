<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateMahasiswaRequest;
use App\Http\Controllers\Controller;
use App\Mahasiswa;

use Illuminate\Support\Facades\Request;

class MahasiswaController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    public function index(){
        $Mahasiswa = Mahasiswa::latest('created_at')->get();
        return view ('mahasiswa.index', compact('Mahasiswa'));
    }
    public function create(){
        return view ('mahasiswa.create');
    }
    public function store(CreateMahasiswaRequest $request){
        Mahasiswa::create($request->all());
        return redirect('mahasiswa')->with('message', 'Data berhasil ditambahkan!');
    }
    public function show($nim){
        $Mahasiswa = Mahasiswa::find($nim);
        return view ('mahasiswa.show', compact('Mahasiswa'));
    }
    public function edit($nim){
        $Mahasiswa = Mahasiswa::find($nim);
        return view ('mahasiswa.edit', compact('Mahasiswa'));
    }
    public function update($nim){
        $Mahasiswa = Mahasiswa::find($nim);
        $Mahasiswa->update(Request::all());
        return redirect('mahasiswa')->with('message', 'Data berhasil diubah!');
    }
    public function destroy($nim){
        Mahasiswa::find($nim)->delete();
        return redirect('mahasiswa')->with('message', 'Data berhasil dihapus!');
    }
}
