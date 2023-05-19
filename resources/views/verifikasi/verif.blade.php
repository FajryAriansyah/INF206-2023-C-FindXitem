@extends('Layouts.main')

@section('container')


@if ($sudahVerif == 'sudah')
    
<div class="card p-5" style="background-color: rgba(99, 64, 25, 0.801);Color:white">
    
    <p style="font-size: 2.5rem;margin: 10px;">Terima Kasih</p>
    <p class="deskripsi-input fs-6 text-justify" style="max-width: 500px; text-align:justify">Anda telah melakukan verifikasi, Harap menunggu verifikasi oleh Admin</p>
    <p style="color:red; font-size:20px; font-weight:700; margin-bottom:0%; margin-top:18px">HATI-HATI!!!</p>
    <span>Jangan menyebarkan informasi pribadi kepada orang lain</span><br><br>

</form>
</div>
@else
<div class="card p-5" style="background-color: rgba(99, 64, 25, 0.801);Color:white">
    <form action="/search/hasil/{{ $barang->id }}/verif/store" enctype="multipart/form-data" method="POST">
        @csrf
    <p style="font-size: 2.5rem;margin: 10px;">Verifikasi</p>
    <p class="deskripsi-input fs-6 text-justify" style="max-width: 500px; text-align:justify">Masukkan foto informasi kepemilikan seperti slip pembayaran, kotak handphone, nomor seri dan lain sebagainya yang dapat dijadikan pegangan</p>
    <input type="file" name="image">
    <p style="color:red; font-size:20px; font-weight:700; margin-bottom:0%; margin-top:18px">HATI-HATI!!!</p>
    <span>Jangan menyebarkan informasi pribadi kepada orang lain</span><br><br>
    <button class="btn btn-primary" type="submit" name="submit">Submit</button>
</form>
</div>
@endif


@endsection