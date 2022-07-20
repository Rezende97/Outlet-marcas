<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class nike extends Controller
{
    public function sobre(){
        $nike = 'nike';

        return view('nike', ['nike' => $nike]);
    }
}
