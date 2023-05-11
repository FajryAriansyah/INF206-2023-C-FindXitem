<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function showLanding(){
        return view('landing-page',[
            'title' => 'Cari barangmu disini'
        ]);
    }

    public function search(){
        return view('Search.hal-pencarian',[
            'title' => 'Search Page'
        ]);
    }
    


    public function kategory(){
        return view('kategori',[
            'title' => 'Kategori'
        ]);
    }

    public function result(){
        return view('result',[
            'title' => 'Hasil'
        ]);
    }

    public function verif($id){

        $data = Barang::findOrFail($id);
       
        return view('Search.verifikasi',[
            'title' => 'Verifikasi',
            'result' => $data
        ]);
    }

    public function notfound(){
        return view('result_no',[
            'title' => 'Result'
        ]);
    }
}
