<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreatePegawaiRequest;
use App\Http\Controllers\Controller;
use App\Pegawai;

use Illuminate\Support\Facades\Request;
class PegawaiController extends Controller
{
    public function index(){
        $pegawai = Pegawai::latest('created_at')->get();
        return view('pegawai.index',compact('pegawai'));
    }
    public function create(){
        return view('pegawai.create');
    }
    public function store(CreatePegawaiRequest $request){
        Pegawai::create($request->all());
        return redirect('pegawai')->with('message', 'Data berhasil ditambahkan!');
    }
    public function show($ID){
        $pegawai = Pegawai::find($ID);
        return view('pegawai.show', compact('pegawai'));
    }
    public function edit($ID){
        $pegawai = Pegawai::find($ID);
        return view('pegawai.edit', compact('pegawai'));
    }
    public function update($ID){
        // echo('<prev>');
        // print_r(Request::all());
        // echo('</prev>');
        // exit();
        // $pegawaiUpdate = Request::all();
        $pegawai = Pegawai::find($ID);
        $pegawai->update(Request::all());
        return redirect('pegawai')->with('message', 'Data berhasil diubah!');
    }
    public function destroy($ID){
        Pegawai::find($ID)->delete();
        return redirect('pegawai')->with('message', 'Data berhasil dihapus!');
    }
}