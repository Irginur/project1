<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\profil;
use Symfony\Contracts\Service\Attribute\Required;

class ProfilController extends Controller
{
    //
    function show(){
        $profil = profil::first();
        if($profil){
             $data =[
            'nama_profil' => $profil->nama_profil,
            'alamat' => $profil->alamat,
            'ttl' => $profil->ttl,
            'jk' => $profil->jk,
            'sekolah' => $profil->sekolah,
            'foto' => $profil->foto,
            'about' => $profil->about,
            'action' => '/profil/update/'.$profil->id
            ];
            return view('profil',$data);
        }else{
            $data = [
            'nama_profil' => '',
            'alamat' => '',
            'ttl' => '',
            'jk' => '',
            'sekolah' => '',
            'foto' => '',
            'about' => '',
            'action' =>'/profil/create',
            ];
        return view('profil',$data);}
    }
    function create(Request $req){
        $validata=$this->validate($req,[
            'nama_profil' => 'required|string|min:3', 
            'alamat' => 'required|min:3',
            'ttl' => 'required|string|min:3',
            'jk' => 'required|string',
            'sekolah' => 'required|string',
            'foto' => 'required|mimes:jpg,png',
            'about' => 'required|string'
        ]);
        $namafile =$req->id.".".$req->file('foto')->getClientOriginalExtension();
        $validata['foto'] =$req->file('foto')->storeAs('foto',$namafile);
        profil::create($validata);
        return redirect('profil ');
    }
    function edit($id){
        $data['profil'] = profil::find($id);
        $data['action'] = url('profil/update').'/'.$data['profil']->id;
        $data['tombol'] = "update";
        return view('profil',$data);
    }
    function update(Request $req){
        $data = profil::where('id',$req->id)->first();
        if($req->foto == ''){
            $foto = $data->foto;
        }else{
            $foto = $req->file('foto')->store('foto');
        }
        profil::where('id',$req->id)->update([
            'nama_profil' => $req->nama_profil,
            'alamat' => $req->alamat,
            'ttl' => $req->ttl,
            'jk' => $req->jk,
            'sekolah' => $req->sekolah,
            'about' => $req->about,
            'foto' => $foto
        ]);
        return Redirect('profil');
    }

}
