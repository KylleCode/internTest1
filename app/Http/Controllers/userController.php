<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\data;

class userController extends Controller
{
    public function index(){
        $users = data::all();
        //$users = data::orderBy('username')->get();
        //                                    vvvv oreder by decending order
        //$users = data::orderBy('username', 'desc')->get();
        //$users = data::where()->get();
        //$users = data::latest()->get();

    
        return view('users.index' , ['users' => $users]);
    }

    public function show($id){
        //$user = data::find($id);
        $user = data::findOrFail($id);

        return view('users.info' , ['user' => $user]);
    }

    public function create(){
        return view('users.create');
    }

    public function store(){
        $data = new data();

        $data->username = request('username');
        $data->password = request('password');
        $data->gamePlatform = request('gamePlatform');
        //error_log($data);
        $data->save();
        
        //return request('gamePlatform');
        //error_log(request('gamePlatform'));

        return redirect('/')->with('mssg', 'welcome new user');
    }

    public function destroy($id){
        $data = data::findOrFail($id);
        $data->delete();

        return redirect('/')->with('mssg', 'USER DELETED');
    }
}
