<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KhoaPhamModel extends Model
{
    protected $table='khoapham';
    protected $fillable = [
        'id', 'monhoc', 'giatien', 'giangvien'
    ];
   
}
