@extends('template')

@section('title','Beeflix | Home')

@section('content')
    <style>
        a{
            text-decoration: none;
            color: #FFFFFF;
        }

        a:hover{
            color: #650004;
        }
    </style>

    @include("navbar")
    <div class="button-group" role="group">
        <button type="button" class="btn btn-primary ms-5 my-4" onclick="history.back()">Go Back</button>
        <a type="button" class="btn btn-outline-danger my-4" href='genre'>SEE ALL MOVIES</a>
    </div>
    <div class="container" style="">
        <div class="row rounded-3 mx-5 mb-3" style="">
            <div class="row mb-2" style="">
                <a class="text-decoration-none fs-4 fw-bolder" href='genre' style="color: #FFFFFF">DRAMA</a>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="card border-0 p-2 mx-1" style="width: 24%">
                    <img src="https://assets.pikiran-rakyat.com/crop/0x0:0x0/x/photo/2022/03/07/616832122.jpeg" class="card-img-top" alt="">
                    <h5 class="card-title text-center p-1">Our Blue</h5>
                    <a type="button" class="btn btn-danger" href="/movie/1">SEE MOVIE</a>
                </div>

                <div class="card border-0 p-2 mx-1" style="width: 24%">
                    <img src="https://assets.pikiran-rakyat.com/crop/0x0:0x0/x/photo/2022/03/07/616832122.jpeg" class="card-img-top" alt="">
                    <h5 class="card-title text-center p-1">Card title</h5>
                    <a type="button" class="btn btn-danger" href="/movie/2">SEE MOVIE</a>
                </div>

                <div class="card border-0 p-2 mx-1" style="width: 24%">
                    <img src="https://assets.pikiran-rakyat.com/crop/0x0:0x0/x/photo/2022/03/07/616832122.jpeg" class="card-img-top" alt="">
                    <h5 class="card-title text-center p-1">Card title</h5>
                    <a type="button" class="btn btn-danger" href="/">SEE MOVIE</a>
                </div>

                <div class="card border-0 p-2 mx-1" style="width: 24%">
                    <img src="https://assets.pikiran-rakyat.com/crop/0x0:0x0/x/photo/2022/03/07/616832122.jpeg" class="card-img-top" alt="">
                    <h5 class="card-title text-center p-1">Card title</h5>
                    <a type="button" class="btn btn-danger" href="/">SEE MOVIE</a>
                </div>
            </div>
            <div class="row mt-5" style="border-bottom: solid 1.5pt #E1020B"></div>
        </div>

        <div class="row rounded-3 mx-5 mb-3" style="">
            <div class="row mb-2" style="">
                <a class="text-decoration-none fs-4 fw-bolder" href='genre' style="color: #FFFFFF">KIDS</a>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="card border-0 p-2 mx-1" style="width: 24%">
                    <img src="https://assets.pikiran-rakyat.com/crop/0x0:0x0/x/photo/2022/03/07/616832122.jpeg" class="card-img-top" alt="">
                    <h5 class="card-title text-center p-1">Our Blue</h5>
                    <a type="button" class="btn btn-danger" href="/">SEE MOVIE</a>
                </div>

                <div class="card border-0 p-2 mx-1" style="width: 24%">
                    <img src="https://assets.pikiran-rakyat.com/crop/0x0:0x0/x/photo/2022/03/07/616832122.jpeg" class="card-img-top" alt="">
                    <h5 class="card-title text-center p-1">Card title</h5>
                    <a type="button" class="btn btn-danger" href="/">SEE MOVIE</a>
                </div>

                <div class="card border-0 p-2 mx-1" style="width: 24%">
                    <img src="https://assets.pikiran-rakyat.com/crop/0x0:0x0/x/photo/2022/03/07/616832122.jpeg" class="card-img-top" alt="">
                    <h5 class="card-title text-center p-1">Card title</h5>
                    <a type="button" class="btn btn-danger" href="/">SEE MOVIE</a>
                </div>

                <div class="card border-0 p-2 mx-1" style="width: 24%">
                    <img src="https://assets.pikiran-rakyat.com/crop/0x0:0x0/x/photo/2022/03/07/616832122.jpeg" class="card-img-top" alt="">
                    <h5 class="card-title text-center p-1">Card title</h5>
                    <a type="button" class="btn btn-danger" href="/">SEE MOVIE</a>
                </div>
            </div>
            <div class="row mt-5" style="border-bottom: solid 1.5pt #E1020B"></div>
        </div>

        <div class="row rounded-3 mx-5 mb-3" style="">
            <div class="row mb-2" style="">
                <a class="text-decoration-none fs-4 fw-bolder" href='genre' style="color: #FFFFFF">TV SHOW</a>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="card border-0 p-2 mx-1" style="width: 24%">
                    <img src="https://assets.pikiran-rakyat.com/crop/0x0:0x0/x/photo/2022/03/07/616832122.jpeg" class="card-img-top" alt="">
                    <h5 class="card-title text-center p-1">Our Blue</h5>
                    <a type="button" class="btn btn-danger" href="/">SEE MOVIE</a>
                </div>

                <div class="card border-0 p-2 mx-1" style="width: 24%">
                    <img src="https://assets.pikiran-rakyat.com/crop/0x0:0x0/x/photo/2022/03/07/616832122.jpeg" class="card-img-top" alt="">
                    <h5 class="card-title text-center p-1">Card title</h5>
                    <a type="button" class="btn btn-danger" href="/">SEE MOVIE</a>
                </div>

                <div class="card border-0 p-2 mx-1" style="width: 24%">
                    <img src="https://assets.pikiran-rakyat.com/crop/0x0:0x0/x/photo/2022/03/07/616832122.jpeg" class="card-img-top" alt="">
                    <h5 class="card-title text-center p-1">Card title</h5>
                    <a type="button" class="btn btn-danger" href="/">SEE MOVIE</a>
                </div>

                <div class="card border-0 p-2 mx-1" style="width: 24%">
                    <img src="https://assets.pikiran-rakyat.com/crop/0x0:0x0/x/photo/2022/03/07/616832122.jpeg" class="card-img-top" alt="">
                    <h5 class="card-title text-center p-1">Card title</h5>
                    <a type="button" class="btn btn-danger" href="/">SEE MOVIE</a>
                </div>
            </div>
            <div class="row mt-5" style="border-bottom: solid 1.5pt #E1020B"></div>
        </div>
    </div>
@endsection
