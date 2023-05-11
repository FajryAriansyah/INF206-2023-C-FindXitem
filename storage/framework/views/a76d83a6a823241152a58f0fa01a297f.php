<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FindXitem</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="navbar">
        <div class="navbar-logo">FindXitem</div>
        <div class="navbar-nav">
            <ul class="navbar-items-container">
                <li class="navbar-item"><a href="#">Home</a></li>
                <li class="navbar-item ">
                    <a class="btnDropdown" href="#" onclick="toggle_dropdown()">Barang</a>
                    <div class="wrapper">
                        <div class="dropdown" id="dropdown">
                        <a href="hal-pencarian">Mencari</a>
                        <a href="hal-pelaporan">Melaporkan</a>
                        <a href="#">Kategori</a>
                        </div>
                    </div>
                </li>
                <li class="navbar-item"><a href="#">About</a></li>
            </ul>
            <button class="btn login">Masuk</button>
            <button class="btn daftar">Daftar</button>
        </div>
    </div>
    <script>
        function toggle_dropdown(){
            document.getElementById('dropdown').classList.toggle('show');
        }

        // tutup boila di click di luar
        window.onclick = function(e){
            if(!e.target.matches('.btnDropdown')){
                var myDropdown = document.getElementById("dropdown");
                if(myDropdown.classList.contains('show')){
                    myDropdown.classList.remove('show')
                }
            }
        }
    </script>

    <div class="content">
        <div class="container" >
            <img src="img/kaca-pembesar.png" alt="Kaca pembesar" style="width:340px">
            <div class="desc" >
                <p style="font-size: 2rem;font-weight: 700;">FINDXITEM, Cari barangmu disini</p>
                <p style="text-align: justify;">FindXitem adalah website terpercaya dalam menangani masalah kehilangan. Bekerja sama dengan Sektor Kepolisian Daerah. Temukan barang-barang berhargamu yang hilang disini</p>
                
                <br>
                <button ><a class="btn" href="hal-pencarian">Mulai Cari</a></button>
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
                <button ><a class="btn" href="hal-pelaporan">Melaporkan</a></button>
            </div>
            <img src="img/barang-buku.png" alt="Kaca pembesar" style="width:340px">
        </div>
    </div>

</body>
</html><?php /**PATH /home/papazy/Documents/FindXitem/resources/views/landing-page.blade.php ENDPATH**/ ?>