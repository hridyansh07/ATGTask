<?php

namespace App\Http\Controllers;

use App\Test;
use App\User;
use Illuminate\Http\Request;

class ATGController extends Controller
{
    public function store()
    {
        $data = request()->validate([
            'name' => 'required',
            'email' => 'required|unique:Tests',
            'pincode' => 'required|max:6'
        ]);

         Test::create($data) ;

            return view('submit', [
                'name' => $data['name'],
                'email' => $data['email'],
                'pincode' => $data['pincode']
            ]);


    }
}
