<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    {{-- <link rel="stylesheet" href="style.css"> --}}
    <link rel="stylesheet" href="{{asset('/css/style.css')}}">
</head>
<body>

<!-- CONTENT -->
<main class="container-fluid my-3">
    <div class="row">
        {{-- Kolom 1 --}}
        <div class="col-sm-12 col-md-2 col-lg-2">
            @include("partial/sidebar")
        </div>
        {{-- Kolom 2 --}}
        <div class="col-sm-12 col-md-6 col-lg-7">
            @include("partial/welcome")
            <div class="row my-4">
                <div class="mb-1 mx-1" style="color:#353E6C; font-weight: bold;">Task Board</div>
                <div class="col-sm-12 col-md-3 col-lg-6">
                    @include("partial/task")
                </div>
                <div class="col-sm-12 col-md-3 col-lg-6">
                    @include("partial/task")
                </div>
            </div>
        </div>
        {{-- Kolom 3 --}}
        <div class="col-sm-12 col-md-4 col-lg-3">
            @include("partial/sideprofile")
        </div>
    </div>
</main>

<!-- Optional JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

</body>
</html>
