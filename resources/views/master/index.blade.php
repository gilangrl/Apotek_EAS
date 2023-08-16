<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <!-- CSS -->
  <link rel="stylesheet" href="assets/css/style.css">
  <!-- FONT AWESOME -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <title>Apotek</title>
</head>
<body>
  <!-- NAVBAR -->
<nav class="navbar navbar-expand-lg  fixed-top" style="background-color: #0071bc;">
  <div class="container">
    <a class="navbar-brand  text-white" href="{{route('halaman_utama')}}">Apotek_ku</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown" style="margin-left: 5%;">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active  text-white" aria-current="page" href="{{route('halaman_utama')}}">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle  text-white" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Obat
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item drop" href="{{route('tampil_obat')}}">Obat</a></li>
            <li><a class="dropdown-item drop" href="{{route('index_obat')}}">Tampil</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Penjualan
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item drop" href="{{route('tambah_transaksi')}}">Penjualan</a></li>
            <li><a class="dropdown-item drop" href="{{route('index_transaksi')}}">Lihat Penjualan</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- CONTENT -->
<div id="content-wrapper" class="d-flex flex-column">
  <br>
  <!-- Main Content -->
  <div id="content">
      <!-- Begin Page Content -->
      <div class="container">
        @yield('home')
        @yield('tampil_obat')
        @yield('add_obat')
        @yield('edit')
        


        @yield('tampil_transaksi')
        @yield('add_transaksi')
        @yield('edit_transaksi')
      </div>
      <!-- /.container-fluid -->
  </div>
  <!-- End of Main Content -->
  
</div>

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script>
    var textWrapper = document.querySelector('.title-utama');
    textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

    anime.timeline({loop: true})
    .add({
      targets: '.title-utama .letter',
      translateX: [0,0],
      translateZ: 0,
      opacity: [0,1],
      easing: "easeOutExpo",
      duration: 2500,
      delay: (el, i) => 100 + 50 * i
    }).add({
      targets: '.title-utama .letter',
      translateX: [0,-30],
      opacity: [1,0],
      easing: "easeInExpo",
      duration: 3000,
      delay: (el, i) => 100 + 50 * i
    });
  </script>

 
  
</body>
</html>
