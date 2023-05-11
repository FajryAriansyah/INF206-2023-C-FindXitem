<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Barang extends Model
{
    use HasFactory;
    protected $table = 'barang'; // untuk menghubungkan ke tabel barang

    protected $guarded = ['id'];
    public function whatsApp(){

        $now = Carbon::now();
        $noHP = $this->noHp;
        $pesan = ' saya ingin menanyakan apakah Anda menemukan barang yang hilang milik saya yaitu '.$this->nama .'. Saya mendengar bahwa barang tersebut mungkin telah ditemukan oleh Anda. Apakah kita dapat berjumpa?';

        if($now->between(Carbon::createFromTime(1,0,0), Carbon::createFromTime(11,0,0) )){
            $pesan = 'Selamat Pagi,' . $pesan;
        }elseif($now->between(Carbon::createFromTime(11,1,0), Carbon::createFromTime(15,30,0) )){
            $pesan = 'Selamat Siang,' . $pesan;
        }elseif($now->between(Carbon::createFromTime(15,31,0), Carbon::createFromTime(18,30,0) )){
            $pesan = 'Selamat Sore,' . $pesan;
        }else{
            $pesan = 'Selamat Malam,' . $pesan;
        }

       return 'https://wa.me/'.$noHP.'?text='.urlencode($pesan);
   }

   public function cari(Request $request){

        $barang = Barang::all();
        $cocok = 0;
        if($request->nama){
            $barang = $barang->where('nama', 'like', '%'.$request->nama,'%');
        
            if($request->waktu){
                $barang = $barang->where('waktu', $request->waktu);
            }
            if($request->lokasi){
                $barang = $barang->where('waktu', $request->lokasi);
            }
        }
        dd($barang);

   }


}





