    @extends('Layouts.main')
    @section('container')

<div class="about">
      <div class="about">About</div>
        <div class="kalimat">Website untuk menemukan barang hilang adalah sebuah platform online yang dibuat untuk membantu orang mencari barang yang hilang atau kehilangan milik mereka. Situs web semacam ini dapat memfasilitasi proses pencarian dengan cara mengumpulkan informasi tentang barang yang hilang dan kemudian mempublikasikannya untuk dilihat oleh orang-orang yang mungkin memiliki informasi yang berguna atau bahkan telah menemukannya.</div>
        <div class="anggota">
            <div class="anggota-item">
              <img src="img/fajry.png" alt="Foto Fajry" style="width: 200px;">
              <span class="anggota-nama">Fajry Ariansyah</span>
              <span class="anggota-nama">2108107010059</span>
            </div>
            <div class="anggota-item">
              <img src="img/devi.png" alt="Foto Devi" style="width: 200px;">
              <span class="anggota-nama">Devi Anggraini</span>
              <span class="anggota-nama">2108107010008</span>
            </div>
            <div class="anggota-item">
              <img src="img/rifal.png" alt="Foto Teuku" style="width: 200px;">
              <span class="anggota-nama">Teuku Rifal Aulia</span>
              <span class="anggota-nama">2108107010064</span>
            </div>
          </div>
        </div>          
        </div>
        <div class="foto"></div>
        <div class="keterangan"></div>
    </div>
<style>


.about {
  margin: 600;
  font-size: 30px;
  position: relative;
  content: "";
  display: block;
  margin: 0 auto;
  font-family: "Roboto", sans-serif;
  color: white;
  text-align: center;
}


.kalimat {
    margin: 700;
    font-size: 24px;
    margin-top: 30px;
    
}

.anggota {
    display: flex;
    justify-content: center;
    align-items: center;
    margin-top: 50px;
    color: black;
    margin: 400;
    font-size: 30px;
  }
  
  .anggota-item {
    display: flex;
    flex-direction: column;
    align-items: center;
    margin-right: 50px;
  }
  
  .anggota-nama {
    margin-top: 10px;
    font-size: 20px;
  }
    </style>

</body>

@endsection