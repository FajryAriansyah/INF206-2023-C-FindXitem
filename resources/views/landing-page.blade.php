@extends('layouts.main')

@section('container')

    <div class="content">
        <div class="container" >
            <img src="img/kaca-pembesar.png" alt="Kaca pembesar" style="width:340px">
            <div class="desc" >
                <p style="font-size: 2rem;font-weight: 700;">FINDXITEM, Cari barangmu disini</p>
                <p style="text-align: justify;">FindXitem adalah website terpercaya dalam menangani masalah kehilangan. Bekerja sama dengan Sektor Kepolisian Daerah. Temukan barang-barang berhargamu yang hilang disini</p>
                
                <br>
                <button><a class="bttn" href="/search">Mulai Cari</a></button>
            </div>
        </div>
        <br>
        <br>
        <br>
        <div class="container second" >
            <div class="desc">
                <p style="font-size: 2rem;font-weight: 700;">Laporkan barang temuan disini</p>
                <p style="text-align: justify;">Terpercaya mengembalikan barang-barang yang hilang. Digunakan oleh kepolisian Indonesia dalam rangka mewujudkan negeri yang aman. Laporkan barang temuanmu disini</p>
                
                <br>
                <button ><a class="bttn" href="{{ url('report') }}">Melaporkan</a></button>
            </div>
            <img src="img/barang-buku.png" alt="Kaca pembesar" style="width:340px">
        </div>
    </div>
@endsection