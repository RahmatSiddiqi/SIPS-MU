<?php

namespace App\Http\Controllers;

use App\Models\Santri;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class SantriController extends Controller
{
    public function index(){
        $data['santris'] = Santri::orderBy('id','desc')->paginate(5);
        return view('santri.index', $data);
    }
    
    public function create(){
        return view('santri.create');
    }
    
    public function store(Request $request){
        $request->validate([
            'nama' => 'required',
            'email' => 'required',
            'alamat' => 'required'
        ]);
        $santri = new Santri;
        $santri ->name = $request->nama;
        $santri ->email = $request->email;
        $santri ->address = $request->alamat;
        $santri ->save();
        return redirect()->route('santri.index')
        ->with('sukses','Company has been created successfully.');
    }
    
    public function show(Santri $santri){
        return view('santri.show',compact('santri'));
    } 
    
    public function edit(Santri $santri){
        return view('santri.edit',compact('santri'));
    }
    
    //Update the specified resource in storage.
    public function update(Request $request, $id){
        $request->validate([
            'nama' => 'required',
            'email' => 'required',
            'alamat' => 'required',
        ]);
        $santri = Santri::find($id);
        $santri->nama = $request->nama;
        $santri->email = $request->email;
        $santri->alamat = $request->alamat;
        $santri->simpan();
        return redirect()->route('santri.index')
        ->with('sukses','Company Has Been updated successfully');
    }
    
    //Hapus resource yang ditentukan dari penyimpanan.
    public function destroy(Santri $santri){
        $santri->delete();
        return redirect()->route('santti.index')
        ->with('sukses','Company has been deleted successfully');
    }
}