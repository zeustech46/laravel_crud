<?php

namespace App\Http\Controllers;

use App\Dosen;
use App\Mahasiswa;
use Illuminate\Http\Request;
use Session;

class crudController extends Controller
{    
    public function insertData(Request $request){
        $dosen = Dosen::where('nama', $request->select)
                        ->value('id');
        Mahasiswa::create([
            'nama' => $request->nama,
            'jenis_kelamin' => $request->jk,
            'nim' => $request->nim,
            'dosen_id' => $dosen            
        ]);        
        return redirect('/beranda');
    }

    public function deleteData($id){                
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->delete();
        return redirect('/beranda');               
    }

    public function editData(Request $request, $id){
        $dosen = Dosen::where('nama', $request->select)
                        ->value('id');

        Mahasiswa::where('id', $id)
        ->update([
            'nama' => $request->nama,
            'jenis_kelamin' => $request->jk,
            'nim' => $request->nim,
            'dosen_id' => $dosen            
        ]);        
        return redirect('/beranda');
    }
}
