<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    //
    public function index(){
        
        return view('Kategori.index',[
            'title' => 'Kategori',
            'kategori' => Kategori::all()
        ]);
    }

    public function show($slug){
        $id = Kategori::where('slug',$slug)->get()[0]->id;
        $posts = Barang::where('kategori_id', $id)->get();
        
        return view('Kategori.show',[
            'title'=>'Kategori '.$slug,
            'posts'=>$posts
        ]);
    }
}
