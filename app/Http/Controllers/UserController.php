<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;    

class UserController extends Controller
{
    //
    function auth(Request $req){
        $login = $req->only('email','password');
        if(Auth::attempt($login)){
            return redirect()->intended('home');
        }
        return redirect()->back();
    }      
    function logout(){
        Auth::logout();
        return redirect('/');
    }
    function show(){
        $data['user'] = User::orderby('name','asc')->get();
        $data['cari'] = "";
        return view('user',$data);
    }
    function add(){
        $data =[
            'action'=>url('user/create'),
            'tombol'=>'simpan',
            'user'=>(object)[
            'id' => '',
            'name' => '',
            'email' => '',
            'password' => '',
            ]
        ];
        return view('form_user',$data);
    }
    function create(Request $req){
        User::create([
            'id' => $req->id,
            'name' => $req->name,
            'email' => $req->email,
            'password' =>bcrypt($req->password)
        ]);
        return redirect('user');
    }
    function hapus($id){
        User::where('id',$id)->delete();
        return redirect('user');
    }
    function edit($id){
        $data['user'] = User::find($id);
        $data['action'] = url('user/update/').$data['user']->id;
        $data['tombol'] = "update";

        return view('form_user',$data);
    }
    function update(Request $req){
        User::where('id',$req->id)->update([
            'id' => $req->id,
            'name' => $req->name,
            'email' => $req->email,
            'password' => bcrypt($req->password),
        ]);
        return Redirect('user');
    }
    function search(Request $req){
        $data['user'] = User::where('id',$req->cari)->orwhere('name','like',"%".$req->cari."%")->orwhere('email',$req->cari)->get();
        $data['cari'] = $req->cari;
        return view('user',$data);
    }
}
