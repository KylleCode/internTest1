<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userCon extends Controller
{
    public function index(){
        $users = [
            ['uname' => 'user1', 'pass' => 'password1'],
            ['uname' => 'user2', 'pass' => 'password2'],
            ['uname' => 'user3', 'pass' => 'password3']
        ];
    
        return view('index' , ['users' => $users]);
    }

    public function show($id){
        return view('info' , ['id' => $id]);
    }
}
