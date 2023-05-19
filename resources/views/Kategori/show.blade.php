@extends('Layouts.main')
@section('container')
    {{-- {{ dd($posts) }} --}}
    <div class="container">

        @if ($posts->count())
            <div class="row d-flex justify-content-center">
                @foreach ($posts as $item)
                    <div class="col-md-4 mb-3">
                        <a href="/search/hasil/{{ $item->id }}">
                            <div class="card p-4">
                                <p>{{ $item->nama }}</p>
                                <img {{ $item->image != null ? 'src=' . asset('/storage/' . $item->image) . ' \"width="400" height="400\" "' : 'src=https://source.unsplash.com/400x400/?' . $item->kategori->english }}"
                                    alt="{{ $item->nama }}">
                                <br>
                                <span>Ditemukan di : {{ $item->lokasi }}</span>
                                <span>Waktu :{{ $item->waktu }}</span>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        @else
        <div class="content content-not-found" style="margin-top: 0; padding-bottom:0">
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

    </div>
@endsection
