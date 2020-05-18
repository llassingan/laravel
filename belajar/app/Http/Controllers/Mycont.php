<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
// use App\User; ini model

class Mycont extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return View
     */
    public function index()
    {
        $n1="hoho";
     	return view('welcome',['n1' => $n1]);
    }

    public function about()
    {
        $n2="haha";
        return view('about',['n2' => $n2 ]);
    }
}