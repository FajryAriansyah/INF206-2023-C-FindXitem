<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Barang;

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

        
        if($request->file('image')){
            $link = 'img/'.time().'-'.$request->image->getClientOriginalName();
            $request->image->move('storage/img', $link);
            // $request['image'] = $link;
            // $request->file('image')->store('img');
        }
        
        $validated = $request->validate([
            'nama' => 'required',
            'kategori' => 'required',
            'warna_dasar' => 'required',
            'warna_sekunder' => 'required',
            'img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:12400',
            'brand' => 'required',
            'lokasi' => 'required',
            'waktu' => 'required|date_format:Y-m-d H:i:s|after:today',
            'nama_penemu' => 'required',
            'noHp' => 'required|numeric|min:10',
            'email' => 'required|email',
        ]);

        Barang::create(
            $validated
        );
        return redirect('/report/hasil');
    }

    public function reportResult(){
        return view('Report.hasil',[
            'title' => 'result',
        ]);
    }
    public function searchResult(Request $request){
       
        // $result = Barang::where('nama', 'like', '%' . request('nama') . '%')->get();

        $barang = Barang::cari($request);
        
        return view('Search.hasil',[
            'title' => 'result',
            'result' => $result
        ]);
        
    }
}