<?php

namespace App\Http\Controllers;

use App\Models\project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    //
    function show(){
        $data['project'] = Project::all();
        return view('project',$data);
    }
    function add(){
        $data =[
            'action'=>url('project/create'),
            'tombol'=>'simpan',
            'project'=>(object)[
            'nama_project' => '',
            'kategori' => '',
            'foto_project' => '',
            'deskripsi' => ''
            ]
        ];
        return view('form_project',$data);
    }
    function create(Request $req){
        $validata =$this->validate($req,[
            'nama_project' => 'required|string|max:20',
            'kategori' => 'required|string|min:3',
            'foto_project' => 'required|mimes:jpg,png',
            'deskripsi' => 'required|string|min:5'
        ]);
        $namafile =$req->nama_project.".".$req->file('foto_project')->getClientOriginalExtension();
        $validata['foto_project'] =$req->file('foto_project')->storeAs('foto_project',$namafile);
        Project::create($validata);
        return redirect('project');
    }
    function hapus($id){
        project::where('id',$id)->delete();
        return redirect('project');
    }
    function edit($id){
        $data['project'] = project::find($id);
        $data['action'] = url('project/update')."/".$data['project']->id;
        $data['tombol'] = "update";

        return view('form_project',$data);
    }
    function update(Request $req){
        project::where('id',$req->id)->update([
            'nama_project' => $req->nama_project,
            'kategori' => $req->kategori,
            'deskripsi' => $req->deskripsi,
            'foto_project' => $req->file('foto_project')->store('foto_project')
        ]);
        return redirect('project');
    }
    function portopolio($id){
        $data['project'] = project::find($id);
        return view('portopolio',$data);
    }
}
