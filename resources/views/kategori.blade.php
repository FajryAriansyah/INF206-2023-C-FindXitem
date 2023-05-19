@extends('Layouts.main')

@section('container')
<div class="">
    <div class="kategori text-center">
        <div class="row gap-3 justify-content-center">

          @foreach ($categories as $category)
          
            <div class="col-sm-2 card " style="max-width: 500px">
              <br>
                <img src="{{ asset('img/lostwallet.png') }}" alt="Gambar 3" data-src="{{ asset('img/lostwallet.png') }}">
                <br><br>
                <h2>{{ $category->nama }}</h2>
                <p class="deskripsi3"><br>
                </p>
            </div>
          @endforeach
          </div>
    </div>
@endsection
