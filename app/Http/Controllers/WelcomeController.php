<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    //
    public function thegioi(){
        echo "Hello World";
        echo '<br />';        
    }

    public function thegioibai($bai){
        echo "Hello World";
        echo '<br />';        
        echo "Xin chao, tơ thử controller $bai";        



    }
}
