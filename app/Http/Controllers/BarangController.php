<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BarangController extends Controller
{
    //
    public function search(){
        return view('Search.hal-pencarian');
    }

    public function report(){
        return view('Report.hal-pelaporan',[
            'title' => 'report Page'
        ]);
    }

    public function store(Request $request){

        
        $id = Kategori::where('nama', $request->kategori)->get();
        // dd($id->isEmpty());
        if($id->isEmpty()){
            Kategori::create([
                'nama' => $request->kategori,
                'slug' => str_replace(' ','-',$request->kategori),
                'english' => $request->kategori
            ]);
        }

        $request->kategori = Kategori::where('nama', $request->kategori)->get()[0]->id;
        // dd($request->kategori);
        if($request->file('image')){
            $link = 'img/'.time().'-'.$request->image->getClientOriginalName();
            $request->image->move('storage/img', $link);
            // $request['image'] = $link;
            // $request->file('image')->store('img');
        }
        
        Barang::create([
            "nama" => $request['nama'],
            "kategori" => $request['kategori'],
            "warna_dasar" => $request['warna_dasar'],
            "warna_sekunder" => $request['warna_sekunder'],
            "image" => $link,
            "brand" => $request['brand'],
            "lokasi" => $request['lokasi'],
            "waktu" => $request['waktu'],
            "nama_penemu" =>$request['nama_penemu'],
            "noHp" => $request['noHp'],
            "email" => $request['email'],
        ]);
        return redirect('/report/hasil');
    }

    public function reportResult(){
        return view('Report.hasil',[
            'title' => 'result',
        ]);
    }
    public function searchResult(Request $request){
       
        // $result = Barang::where('nama', 'like', '%' . request('nama') . '%')->get();
        $barang = Barang::query();
        
        // $cocok = 0;
        if($request->nama){
            $barang = $barang->where('nama', 'like', '%'.$request->nama.'%');
        }
        if($request->waktu){
            $barang = $barang->where('waktu', $request->waktu);
        }
        if($request->lokasi){
            $barang = $barang->where('waktu', $request->lokasi);
        }
        $barang = $barang->get();
        // dd($barang[0]);
        
        return view('Search.hasil',[
            'title' => 'result',
            'result' => $barang
        ]);
        
    }
    public function searchResultView(Barang $barang){
        // dd($barang->nama);
        return view('Search.hasilBarang',[
            'title' => 'Result',
            'result' => $barang
        ]);
    }


}