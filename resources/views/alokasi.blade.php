<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alokasi Ruangan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    {{-- <link rel="stylesheet" href="style.css"> --}}
    <link rel="stylesheet" href="{{asset('/css/style.css')}}">
</head>
<body>
    <main class="container-fluid my-3">
        <div class="row">
            {{-- Kolom 1 --}}
            <div class="col-sm-12 col-md-3 col-lg-2">
                @include("partial/sidebar")
            </div>
            {{-- Kolom 2 --}}
            <div class="col-sm-12 col-md-6 col-lg-7">
                <div class = "row my-3"></div>
                <div class = "row mt-5 mx-1">
                    <div class="card-build d-flex flex-column justify-content-center align-items-center" style="width: 1065px; height: 785px; border-radius: 15px; background-color: white; padding:auto;">
                        <img src="img/building.png" style="width:150px; height: 120px;"alt="">
                        <div>Click details to alocate room</div>
                    </div>
                </div>
            </div>
            {{-- Kolom 3 --}}
            <div class="col-sm-12 col-md-3 col-lg-3">
                <div class = "row mt-1 mb-2">
                    <nav class="navbar navbar-light">
                        <div class="container-fluid">
                          <form class="d-flex">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"  style="border-radius: 10px;" >
                            <button class="btn btn-outline-success" type="submit"  style="border-radius: 10px;" >Search</button>
                          </form>
                        </div>
                      </nav>
                </div>
                <div class="row mx-1">
                    <div class="select-building" style="width:500px; height:785px; background-color: white; border-radius:15px;">
                        <div class="task-logo ml-5 mt-3">
                            <img src="img/task-1.png" style="width: 40px; border-radius: 10px; background-color: #5E6790;">
                    
                        </div>
                    </div>
                </div>
                {{-- @include("partial/sideprofile") --}}
            </div>
        </div>
    </main>
</body>
</html>