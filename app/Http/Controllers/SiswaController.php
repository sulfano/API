<?php

namespace App\Http\Controllers;

use App\Model\Siswa;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class SiswaController extends Controller{


    public function index(){

        $siswa  = Siswa::all();

        return response()->json($siswa);

    }

    public function getSiswa($id){

        $siswa  = Siswa::find($id);

        return response()->json($siswa);
    }

    public function saveSiswa(Request $request){

        $siswa = Siswa::create($request->all());

        return response()->json($siswa);

    }

    public function deleteSiswa($id){
        $siswa  = Siswa::find($id);

        $siswa->delete();

        return response()->json('success');
    }

    public function updateSiswa(Request $request,$id){
        $siswa  = Siswa::find($id);

        $siswa->name = $request->input('name');
        $siswa->address = $request->input('address');
        $siswa->fathers_name = $request->input('fathers_name');
        $siswa->mother_name = $request->input('mothers_name');

        $siswa->save();

        return response()->json($siswa);
    }

}


