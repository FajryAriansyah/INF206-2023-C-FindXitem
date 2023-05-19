@extends('Layouts.main')
@section('container')
    <div class="card bg-light p-5" style="width:1020px">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Barang</th>
                    <th scope="col">Image</th>
                    <th scope="col">Tindakan</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $index = 1;
                @endphp
                @foreach ($data as $item)
                    <tr >
                        <th scope="row">{{ $index++ }}</th>
                        <td>{{ $item->user->name }}</td>
                        <td>{{ $item->barang->nama }}</td>
                        <td> <span id="tekan">di sini</span></td>
                        <div id="popup">
                            <img src="{{ asset('storage/' . $item->image) }}" style="max-height:500px"  alt="Gambar" />
                        </div>
                        <div id="overlay"></div>
                        
                        <td>
                            @if($item->status == "accepted")
                            <button class="btn btn-success me-2">Accepted</button>
                            @elseif($item->status == "rejected")
                            <button class="btn btn-danger">Rejected</button>
                            @else
                            <div class="d-flex">

                                <form action="{{ $item->id }}/ac" method="post">
                                    @csrf
                                    <button class="btn btn-success me-2">Accept</button>
                                </form>
                                
                                <form action="{{ $item->id }}/re" method="post">
                                    @csrf
                                    <button class="btn btn-danger">Reject</button>
                                </form>
                            </div>
                            @endif
                                
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>


        <!-- HTML untuk latar belakang buram -->
    </div>

    <script>
        document.getElementById('tekan').addEventListener('click', function() {
            document.getElementById('popup').style.display = 'block';
            document.getElementById('overlay').style.display = 'block';
        });

        document.getElementById('overlay').addEventListener('click', function(event) {
    if (event.target === this) {
        document.getElementById('popup').style.display = 'none';
        document.getElementById('overlay').style.display = 'none';
    }
});
    </script>
@endsection
