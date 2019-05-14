<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KhoaPhamModel;
use App\Http\Requests\KhoaPhamRequest;

class KhoaPhamController extends Controller
{
   public function them(KhoaPhamRequest $request){
        $khoapham=new KhoaPhamModel;
        $khoapham->monhoc=$request->txtmonhoc;
        $khoapham->giatien= ($request->txtgiatien);
        $khoapham->giangvien= ($request->txtgiangvien);
        $khoapham->save();
        return redirect('form/dang-ky-thanh-vien');


   }
}
