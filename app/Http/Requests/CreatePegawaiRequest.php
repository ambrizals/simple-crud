<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreatePegawaiRequest extends Request
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
            'Nama' => 'required',
            'Email' => 'required|email',
            'level' => 'required|numeric'
            //
        ];
    }
    public function messages(){
        return[
            'Nama.required' => 'Kolom nama harus di isi',
            'Email.required' => 'Kolom email harus di isi',
            'Email.email' => 'Format email tidak sesuai',
            'level.required' => 'Level pegawai belum dipilih',
            'level.numeric' => 'Level pegawai yang dipilih tidak sesuai' 
        ];
    }
}
