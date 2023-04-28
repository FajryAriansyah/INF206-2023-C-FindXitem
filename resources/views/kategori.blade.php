<!DOCTYPE html>
<html>
  <head>
    <title>Judul</title>
    <link rel="stylesheet" href="{{ asset('css/cat.css') }}">
  </head>
  <body>
    @extends('Layouts.main')
    
    @section('container')

      <div class="kategori">
        <div class="card1">
          <form>
            <img src="{{ asset('images/cathp.png') }}" alt="Gambar 2" data-src="{{ asset('img/catlost.jpg') }}">
            <h2>Hewan</h2>
            <p class="deskripsi1">Nama Hewan: Kucing(simba)<br>Tanggal Hilang: 31 Oktober 2021<br>Nomor HP: 08123456789</p>
          </form>
        </div>
        <div class="card2">
          <form>
            <img src="{{ asset('images/cathp.png') }}" alt="Gambar 2" data-src="{{ asset('img/catlost.jpg') }}">
            <h2>Hewan</h2>
            <p class="deskripsi1">Nama Hewan: Kucing(simba)<br>Tanggal Hilang: 31 Oktober 2021<br>Nomor HP: 08123456789</p>
          </form>
        </div>       
         <div class="card3">
          <form>
            <img src="{{ asset('images/cathp.png') }}" alt="Gambar 2" data-src="{{ asset('img/catlost.jpg') }}">
            <h2>Hewan</h2>
            <p class="deskripsi1">Nama Hewan: Kucing(simba)<br>Tanggal Hilang: 31 Oktober 2021<br>Nomor HP: 08123456789</p>
          </form>
        </div>
        <div class="card4">
          <form>
            <img src="{{ asset('images/losthp.png') }}" alt="Gambar 2" data-src="{{ asset('img/losthp.png') }}">
            <h2>Elektronik</h2>
            <p class="deskripsi2">Nama Barang: Handphone Samsung S22<br>Tanggal Hilang: 1 November 2021<br>Nomor HP: 08123456789</p>
          </form>
        </div>
        <div class="card5">
          <form>
            <img src="{{ asset('images/lostwallet.png') }}" alt="Gambar 3" data-src="{{ asset('img/lostwallet.png') }}">
            <h2>Aksesoris</h2>
            <p class="deskripsi3">Nama Barang: Dompet Kallibrade<br>Tanggal Hilang: 2 November 2021<br>Nomor HP: 08123456789</p>
          </form>
        </div>
      </div>

    <script>
      var cards = document.querySelectorAll('.kategori > div');
      for (var i = 0; i < cards.length ; i++){
        cards[i].onclick = function(){
          // Ambil elemen gambar dan deskripsi pada card yang ditekan
          var gambar = this.querySelector('img');
          var deskripsi = this.querySelector('p');

          // Toggle kelas untuk menampilkan atau menyembunyikan elemen gambar dan deskripsi
          if (gambar.classList.contains('active')){
            gambar.classList.remove('active');
            deskripsi.classList.remove('active');
            gambar.setAttribute('src', ''); // Menghapus src saat elemen disembunyikan
          } else {
            gambar.classList.add('active');
            deskripsi.classList.add('active');
            gambar.setAttribute('src', gambar.dataset.src); // Menambahkan src baru saat elemen ditampilkan
          }
        }
      }
    </script>

  @endsection
  </body>
</html>
