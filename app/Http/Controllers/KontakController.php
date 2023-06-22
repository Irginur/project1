<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kontact;

class KontakController extends Controller
{
    //
    function show(){
        $data['kontak'] = kontact::all();
        return view('kontak',$data);
    }
    function add(){
        $data =[
            'nama_kontak' => '',
            'email' => '',
            'pesan' => ''
        ];
        return view('portopolio',$data);
    }
    function create(Request $req){
        kontact::create([
            'nama_kontak' => $req->nama_kontak,
            'email' => $req->email,
            'pesan' => $req->pesan
        ]);
        return redirect('kontak');
    }
}
