<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Beeflix | {{ $movie->title }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body style="background-color: #222222; margin:0%">
    @include("navbar")
    <div class="button-group" role="group">
        <button type="button" class="btn btn-primary ms-5 my-4" onclick="history.back()">Go Back</button>
        <a type="button" class="btn btn-outline-danger my-4" href='/'>SEE ALL MOVIES</a>
    </div>

    <div class="container rounded-3" style="width: 78%; background-color: #650004">
        <div class="row py-4">
            <div class="col-4 d-flex justify-content-center" >
                <img src="{{ $movie->photo }}" class="" alt="" style="height: 32rem; width: auto; border: solid 6pt #FFFFFF">
            </div>
            <div class="col-8 d-flex justify-content-start align-items-start">
                <div class="row ps-2">
                    <div class="col-12" style="border-bottom: solid 2pt #B40108">
                        <h2 class="text-start fw-bold" style="color: #FFFFFF">{{ $movie->title }}</h2>
                    </div>
                    <div class="row">
                        <h5 class="fw-bolder pt-2" style="color: #FFF000">Rating {{ $movie->rating }}/10</h5>
                        <p class="font-monospace" style="color: #FFAAAA; font-size:11pt">{{ $movie->description }}</p>
                        <h5 class="fw-bolder pt-0 pb-2" style="color: #FFF000">Genre :
                            <a href="/genre/{{ $movie->genre->id }}">{{ $movie->genre->name }}</a>
                        </h5>
                    </div>
                    <div class="col-12 justify-content-center align-items-end" style="width: 75%">
                        <h5 class="fw-bolder" style="color: #FFF000">EPISODE</h5>
                        <table class="table table-hover table-bordered ms-1">
                            <thead>
                              <tr>
                                <th class="episodeCell text-center" scope="col">Episode</th>
                                <th class="titleCell text-center" scope="col">Title</th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach ($episodes as $item)
                                    <tr class="table-hover">
                                        <td class="episodeCell text-center">{{$item->episode }}</td>
                                        <td class="titleCell text-center">{{$item->title}}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                        <div class="d-flex justify-content-center">
                            {{$episodes->links()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
