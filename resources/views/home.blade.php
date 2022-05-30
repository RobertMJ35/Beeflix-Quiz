<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Beeflix | Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body style="background-color: #222222; margin:0%">
    @include("navbar")
    <div class="button-group" role="group">
        <button type="button" class="btn btn-primary ms-5 my-4" onclick="history.back()">Go Back</button>
        <a type="button" class="btn btn-outline-danger my-4" href='/'>SEE ALL MOVIES</a>
    </div>

    @foreach ($genres as $item)
        <div class="container" style="">
            <div class="row rounded-3 mx-5 mb-3" style="">
                <div class="row mb-2" style="">
                    <a class="fs-4 fw-bolder" href='/genre/{{ $item->id }}'>{{ $item->name }}</a>
                </div>
                <div class="row d-flex justify-content-center">
                    @foreach ($movies as $item1)
                        @if ($item->id == $item1->genre_id)
                            <div class="card border-0 p-2 mx-1 mb-4" style="width: 24%">
                                <img src="{{ $item1->photo }}" class="card-img-top" alt="" style="height: 100%">
                                <h5 class="card-title text-center p-1">{{ $item1->title }}</h5>
                                <a type="button" class="btn btn-danger" href="/movie/{{ $item1->id }}">SEE MOVIE</a>
                            </div>
                        @endif
                    @endforeach
                </div>
                <div class="row mt-3" style="border-bottom: solid 1.5pt #B40108"></div>
            </div>
        </div>
    @endforeach
</body>
</html>
