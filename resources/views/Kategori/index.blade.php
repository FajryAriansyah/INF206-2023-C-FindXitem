@extends('Layouts.main')

@section('container')
{{-- {{ dd($kategori[0]->english) }} --}}
    <div class="kategori">
    <div class="row gap-4 justify-content-center">
      @foreach ($kategori as $item)
      <div class="col-md-2">
        <a href="/kategori/{{$item->slug}}">
          <div class="card text-bg-dark">
              <img src="https://source.unsplash.com/300x300/?{{ $item->english }}" class="card-img" alt="{{$item->nama}}">
              <div class="card-img-overlay d-flex align-items-center p-0 ">
                  <h5 class="card-title text-center flex-fill p-4 fs-3" style="background-color: rgba(0,0,0,0.7)">{{$item->nama}}</h5>
              </div>
          </div>
          </a>
      </div>
      @endforeach
    </div>
    </div>
    @endsection
