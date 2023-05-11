<div class="navbar" style="font-family: 'Poppins'">
    <div class="navbar-logo fs-3" style="cursor:pointer;" onclick="window.location='{{ url("/") }}'">FindXitem</div>
    <div class="navbar-navi">
        <ul class="navbar-items-container">
            <li class="navbar-item"><a href="/">Home</a></li>
            <li class="navbar-item ">
                <a class="btnDropdown" href="#" onclick="toggle_dropdown()">Barang</a>
                <div class="wrapper">
                    <div class="drop-down" id="dropdown">
                    <a href="/search">Mencari</a>
                    <a href="/report">Melaporkan</a>
                    <a href="/kategori">Kategori</a>
                    </div>
                </div>
            </li>
            <li class="navbar-item"><a href="/about">About</a></li>
            @auth
            <li class="navbar-item ">
               
                    <i class="bi bi-person-circle  btnDropdownIcon" onclick="toggle_dropdown_icon()" style="width:2rem"></i>
                    
                <div class="wrapper">
                    <div class="drop-down bg-primary p-2" style="width:20px" id="dropdownIcon">
                        <form action="/logout" method="POST" >
                            @csrf
                            <button type="submit" class="dropdown-item" ><i
                                    class="bi bi-box-arrow-right"></i>Logout</button>
                        </form>
                    </div>
                </div>
            </li>
             @else   
             <button class="btn login me-2 rounded-pill" onclick="window.location='{{ url('/login') }}'">Masuk</button>
             <button class="btn daftar ms-2 rounded-pill" onclick="window.location='{{ url('/login') }}'">Daftar</button>
            @endauth
        </ul>
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
        if(!e.target.matches('.btnDropdownIcon')){
            var myDropdown = document.getElementById("dropdownIcon");
            if(myDropdown.classList.contains('show')){
                myDropdown.classList.remove('show')
            }
        }
    }
    function toggle_dropdown_icon(){
        document.getElementById('dropdownIcon').classList.toggle('show');
    }

   

</script>