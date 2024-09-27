<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('/css/style.css')}}">
    <style>
        /* Reset margin dan padding untuk semua elemen */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
        }

        body {
            background-color: #DBDDF4;
        }

        main {
            min-height: 100vh; /* Pastikan konten utama memenuhi tinggi layar */
            display: flex;
            align-items: stretch; /* Pastikan semua kolom memiliki tinggi yang sama */
        }

        .row {
            width: 100%;
        }

        .col {
            display: flex;
            align-items: start; /* Pusatkan konten secara vertikal */
            justify-content: start; /* Pusatkan konten secara horizontal */
            height: auto; /* Tinggi kolom, sesuaikan sesuai kebutuhan */
            box-sizing: border-box;
        }

        p {
            margin: 0; /* Hapus margin default agar paragraf tidak bergeser */
        }

        .sub-columns {
            display: flex;
            width: 100%;
            height: 16%;
            gap: 10px; /* Jarak antara kolom 2A dan 2B */
        }

        .sub-column {
            flex: 1; /* Pastikan kolom 2A dan 2B memiliki lebar yang sama */
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: white; /* Warna latar belakang untuk sub-kolom */
            border-radius: 10px; /* Sudut yang membulat */
            height: 100%;
        }

        .column-title {
            margin-bottom: 15px; /* Sesuaikan jarak sesuai kebutuhan */
        }
    </style>
</head>
<body>

<!-- CONTENT -->
<main class="container-fluid my-0 p-0"> <!-- Menghapus padding -->
    <div class="row g-0"> <!-- g-0 untuk menghapus jarak antar kolom -->
        <!-- Kolom 1 -->
        <div class="col col-sm-12 col-md-2 col-lg-2 p-2 d-none d-md-block">
            <div class="bg-white p-3" style="height:100%; width:100%; border-radius:15px;">
                <div class = "logo-text">
                    <div>
                        <img src="img/logo.png" class="logo mb-3 mt-3 me-2 ms-2" alt="...">FOCUS
                    </div>
                </div>
                <div>
                    <div type="button" class="sideOp">
                        <div> 
                            <img src="img/dashboard.png" class="side-logo me-3">Dashboard
                        </div>
                    </div>
                    <div type="button" class="sideOp">
                        <div> 
                            <img src="img/users.png" class="side-logo me-3">Profile
                        </div>
                    </div>
                    <a  href="/alokasi" class="nav-link">
                        <div type="button" class="sideOp">
                            <div> 
                                <img src="img/room.png"  action="alokasi" class="side-logo me-3">Alokasi Ruangan
                            </div>
                        </div>
                    </a>
                    <div type="button" class="sideOp">
                        <div> 
                            <img src="img/prodi.png" class="side-logo me-3">Input Program Studi
                        </div>
                    </div>
                    <div type="button" class="sideOp">
                        <div> 
                            <img src="img/logout.png" class="side-logo me-3">Log Out
                        </div>
                    </div>
                    </div>
            </div>
        </div>
        <!-- Kolom 2 -->
        <div class="col col-sm-9 col-md-6 col-lg-7 d-flex flex-column justify-content-start p-2 pt-3">
            <div class="text-black column-title d-flex justify-content-start" style="width:100%; height: 5%; font-weight: bold; border-radius: 5px; margin: 0;">
                <p class="d-flex aling-items-end m-2">Dashboard</p>
            </div>
            <div class="bg-white column-title d-flex justify-content-between" style="width:100%; height: 24%; border-radius: 15px; margin: 0; position: relative;">
                <div style="padding:5%;">
                    <h3 class="card-title" style="font-weight: bold;">Welcome Back, Aniqah Nursabrina</h3>
                    <p class = "card-description d-none d-md-block" style="padding-top:2%; font-size: 95%;">"Believe in yourself and all that you are. Know that there is something inside you that is greater than any obstacle."</p>
                </div>
                <img src="img/orang-1.png" class="orang mb-0" alt="">
            </div>
            <div class="sub-columns d-flex flex-column flex-md-row justify-content-between pt-2">
                @include("partial/try")
                @include("partial/try")
                
            </div>
            
            
        </div>
        <!-- Kolom 3 -->
        <div class="col col-sm-3 col-md-4 col-lg-3 d-flex flex-column justify-content-start p-2 d-none d-md-block">
            <nav class="navbar navbar-light pb-2">
                <div>
                  <form class="d-flex justify-content-start">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"  style="border-radius: 10px;" >
                    <button class="btn btn-outline-success" type="submit"  style="border-radius: 10px;" >Search</button>
                  </form>
                </div>
              </nav>
            {{-- <p class="text-black column-title" style="width:100%; height: 5%; border-radius: 5px; margin: 0;">Kolom 3</p> --}}
            <div class="text-black bg-white pt-3" style="width:100%; height:40%; border-radius: 15px; margin: 0;text-align:center;">
                {{-- @include("partial/sideprofile") --}}
                <img src="img/profile.png" style="width: 27%; display: block; margin: auto;" alt="">
                <span class="badge rounded-pill bg-secondary mt-3">Bagian Akademik</span>
                <h5 class="card-title" style="font-weight: bold;">Aniqah Nursabrina</h5>
                <p class = "card-description">24060122120036</p>
                <p class = "card-description">aniqahnursabrina@gmail.com</p>
                {{-- <p class = "card-description mx-3 my-0">_______________________________________</p> --}}
                <p class = "card-description">Fakultas Sains dan Matematika</p>
                <div class="d-flex justify-content-center">
                    {{-- <div class="ms-auto "> --}}
                        <button class="btn btn-details mt-4">Details</button>
                    {{-- </div> --}}
                </div>
            </div>
        </div>
    </div>
</main>

<!-- Optional JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

</body>
</html>
