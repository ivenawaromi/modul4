<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Belajar Controller & View pada Laravel </title>
    @vite('resources/sass/app.scss')
</head>
<body>
    <div class="container text-center my-5">
        <h1 class="mb-4"> Belajar Controller & View pada Laravel </h1>
        <img class="img-thumbnail" src="
        {{ Vite::asset('resources/img/laravel.png')}}" alt="image">

        <div class="col-md-2 offset-md-5 mt-4">
            <div class="d-grid gap-5">
                <a class="btn btn-primary" href="{{ route('home')}}">Home</a>
            </div>
        </div>
    </div>
    @vite('resources/js/ap')
</body>
</html>
