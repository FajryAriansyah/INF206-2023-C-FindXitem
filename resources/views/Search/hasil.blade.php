@extends('Layouts.main')

@section('container')

   @if($result->count())
    <div class="content p-5 rounded bg-light d-flex align-self-center shadow">
        <div class="col foto text-center">
            @if ($result[0]->image)
                <img src="{{ asset('storage/'. $result[0]->image) }}" alt="">
                @else
                <img src="{{ asset('storage/'. $result[0]->image) }}" alt="">
            @endif
        </div>
        <div class="col deskripsi d-flex flex-col justify-content-center mt-0 fs-5 border-start ps-3">
            <span>Barang : {{ $result[0]->nama }}</span>
            <span>Kategori : {{ $result[0]->kategori }}</span>
            <span>Lokasi ditemukan : {{ $result[0]->lokasi }}</span>
            <span>Waktu ditemukan : {{ $result[0]->waktu }}</span>
            <br>
            <p>Apakah ini punya anda ?</p>
            <a href="{{ route('verifikasi', $result[0]->id) }}" class="bttn text-center mb-3">
                    <button class=" bttn">
                      Ya  
                    </button>
                </a>
            
            <a href="/result/notfound" class="bttn bg-danger text-center">
                <button class="bttn bg-danger">
                    Bukan
                </button>
                </a>
        </div>

    </div>
    @else
    <div class="content content-not-found">
        <img class="img-not-found" src="/img/no-result-found.png" alt="No-result-found img">
        <div class="desc">
            <p style="font-size: 2rem;font-weight: 700;">Maaf barang yang anda cari belum ditemukan</p>
            <p>Coba masukkan kata kunci lain tentang barang anda</p>
            <p>Anda dapat menunggu notifikasi hingga barang anda ditemukan</p>
            <br>
            <button><a class="bttn" href="/search">Cari kembali</a></button>
        </div>
    </div>
    @endif
@endsection