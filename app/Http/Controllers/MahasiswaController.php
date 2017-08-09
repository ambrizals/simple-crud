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
        $Mahasiswa = Mahasiswa::latest('created_at')->where(['flag_delete' => 0])->get();
        $Mahasiswa = Mahasiswa::paginate(10);
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
		Mahasiswa::where('nim',$nim)->update(['flag_delete' => 1]);
        return redirect('mahasiswa')->with('message', 'Data berhasil dihapus!');
    }
	public function restore($nim) {
		Mahasiswa::where('nim',$nim)->update(['flag_delete' => 0]);
        return redirect('mahasiswa')->with('message', 'Data telah dikembalikan!');
	}
	public function terhapus(){
        $Mahasiswa = Mahasiswa::latest('created_at')->where(['flag_delete' => 1])->get();
        return view ('mahasiswa.terhapus', compact('Mahasiswa'));
	}
}
