<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jumlahUmpi extends Model
{
    //

     protected $fillable = [
        'wni', 'wna'
    ];

     protected $table = 'tbl_jumlah_umpi';

}
