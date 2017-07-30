<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pegawai extends Model
{
    protected $primaryKey = 'ID';
    protected $table = 'pegawai';
    protected $fillable = ['Nama','Email','level'];
}
