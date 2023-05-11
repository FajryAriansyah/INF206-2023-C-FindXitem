@extends('Layouts.main')

@section('container')
    <div class="content">
        <p style="font-size: 2.5rem;margin-bottom: 20px; color:white">Submit Barang temuan</p>
        <form action="/report" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-grid">

                <div class="input_field">
                    <label for="">Barang temuan</label>
                    <p class="deskripsi-input">(Handphone, Jaket, Dompet, Hewan, Tas dll). </p>
                    <input type="text" name="nama" class="input form-control">
                </div>
                <div class="input_field">
                    <label for="">Kategori Barang</label>
                    <p class="deskripsi-input">(Hewan, Pakaian, Elektronik dll). </p>
                    <input type="text" name="kategori" class="input form-control">
                </div>
                <div class="input_field">
                    <label for="">Warna utama Barang</label>
                    <p class="deskripsi-input">(Warna utama dari barang anda). </p>
                    <input type="text" name="warna_dasar" class="input form-control">
                </div>
                <div class="input_field">
                    <label for="">Warna kedua Barang</label>
                    <p class="deskripsi-input">(Warna-warna kecil dari barang anda). </p>
                    <input type="text" class="input form-control" name="warna_sekunder">
                </div>
                <div class="input_field">
                    <label for="">Brand Barang</label>
                    <p class="deskripsi-input">(Samsung, Iphone, Nike, Adidas). </p>
                    <input type="text" class="input form-control" name="brand">
                </div>
                <div class="input_field">
                    <label for="">Deksripsi Tambahan</label>
                    <p class="deskripsi-input">Beri Deskripsi Tambahan</p>
                    <input type="text" class="input form-control" name="deskripsi">
                </div>
                <div class="input_field">
                    <label for="">Foto Barang</label>
                    <p class="deskripsi-input">Opsional | Masukkan Foto Barang</p>
                    <input type="file" class="bg-white rounded col-md-6" id="image" name="image">
                </div>
            </div>
            
            <p style="font-size: 2.5rem;margin: 10px;Color:white">Lokasi dan Waktu</p>
            <div class="form-grid">
                <div class="input_field">
                    <label for="">Lokasi Penemuan</label>
                    <p class="deskripsi-input">(Tuliskan lokasi kira-kira ditemukan barang). </p>
                    <input type="text" class="input form-control" name="lokasi">
                </div>
                <div class="input_field">
                    <label for="">Tanggal Penemuan</label>
                    <p class="deskripsi-input">(Estimasi waktu penemuan). </p>
                    <input type="date" class="input form-control" value="" name="waktu">
                </div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31768.869652099464!2d95.32211199999999!3d5.550899200000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3040374934a943ab%3A0xbabe816ca4be1e2f!2sMasjid%20Raya%20Baiturrahman!5e0!3m2!1sid!2sid!4v1681398032351!5m2!1sid!2sid" width="480" height="300" style="border:solid 2px rgb(143, 143, 143);border-radius: 20px; " allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" ></iframe>
                
            </div>
            <br>
            <p style="font-size: 2.5rem;margin: 10px;Color:white">Informasi Pengirim</p>
            <div class="form-grid">
                <div class="input_field">
                    <label for="">Nama</label>
                    <br>
                    <input type="text" class="input form-control" value="" name="nama_penemu">
                </div>
                <div class="input_field">
                    <label for="" name="noHp">No HP</label>
                    <br>
                    <input type="text" name="noHp" class="input form-control">
                </div>
                <div class="input_field">
                    <label for="">Email</label>
                    <br>
                    
                    <input type="text" class="input form-control" name="email">
                </div>
                
            </div>


        <input type="submit" name="submit"  id="submit" value="Submit">
        </form>
        
    </div>
@endsection