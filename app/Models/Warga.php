<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Warga extends Model
{
    use HasFactory;
    // defaulnya laravel itu memakai bahasa inggris dan yang di model itu singular dan yang ada di table database itu jamak
    // sehingga yang di table itu ada tambahan 's'
    // dan jika menggunakan bahasa indonesia nama table dan model itu disamakan dan perlu ada tambahan kodingan dibawah ini
    protected $table = 'warga';

    // data yang boleh dimasukan secara masal itu apa aja menggunakan code dibawah ini
    // protected $fillable = ['nama', 'nik'];

    // kebalikan nya
    protected $guarded = [];
}
