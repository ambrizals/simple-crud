<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateMahasiswaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nim'=> 'required|numeric',
            'nama' => 'required',
            'jurusan' => 'required',
            'alamat' => 'required',
            'telepon' => 'required|numeric',
            //
        ];
    }
    public function messages(){
        return[
            'nim.required' => 'NIM belum di isi !',
            'nim.numeric' => 'NIM harus angka !',
            'nama.required' => 'Nama belum di isi !',
            'jurusan.required' => 'Jurusan belum di pilih',
            'alamat.required' => 'Alamat belum di isi',
            'telepon.required' => 'Telepon belum di isi',
            'telepon.numeric' => 'Telepon harus angka !',
        ];
    }
}
