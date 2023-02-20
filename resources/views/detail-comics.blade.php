<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fumetto</title>
</head>
<body>
    @include('partials.header')
    @include('partials.jumbotron')
    <div class="container">
        <div class="row" >
            <div class="col-8">
                <div class="d-flex justify-content-center align-items-center">  
                    <div class="p-2 ">
                        <img src="{{$single['thumb']}}" alt="">
                    </div>
                    <div class="mt-3 mx-2">
                        <h2 class="p-2 ">{{$single['title']}}</h2>
                        <div class="price-bar d-flex justify-content-between align-items-center p-2 border">
                            <div class="d-flex align-items-center">
                                <h6 class="p-2">U.S PRICE </h6>
                                <span class="fw-bold text-white">{{$single['price']}}</span>
                            </div>
                            <div>
                                <h6 class="mx-3">Available</h6>
                            </div>
                        </div>
                        <p class="p-2 fw-semibold">{{$single['description']}}</p>
                    </div>
                </div> 
            </div>
            <div class="col-4">
                <div class="d-flex justify-content-center align-items-center h-100">
                    <img class="img-adv" src="{{Vite::asset('../resources/img/adv.jpg')}}" alt="">
                </div>
            </div>
        </div>
        <div class="row fw-semibold mt-5">
            <div class="col-6" >
                <div>  
                    <h3>Talent</h3>
                </div>
                <hr>
                <div class="d-flex">
                    <div class="col-2">
                        <p class="fw-bold">Art by:</p>
                    </div>
                    <div class="col-8 d-flex flex-wrap">
                        @foreach ($single['artists'] as $artist)
                        <p>{{$artist}}</a>    
                        @endforeach
                    </div>
                </div>
                <hr>
                <div class="d-flex">
                    <div class="col-2">
                        <p class="fw-bold">Written by:</p>
                    </div>
                    <div class="col-8 d-flex flex-wrap">
                        @foreach ($single['writers'] as $writer)
                        <p>{{$writer}}</p>    
                        @endforeach
                    </div>
                </div>
               
                <hr>
            </div>
            <div class="col-6" >
                <div>
                    <h3>Specs</h3>
                </div>
                <hr>
                <div class="d-flex">
                    <div class="col-2">
                        <p >Series:</p>
                    </div>
                    <div class="col-8">
                        <a class="thumb-color"  href="">{{$single['series']}}</a>
                    </div>
                </div>
                <hr>
                <div class="d-flex">
                    <div class="col-2">
                        <p >U.S Price:</p>
                    </div>
                    <div class="col-8">
                        <p>{{$single['price']}}</a>
                    </div>
                </div>
                <hr>
                <div class="d-flex">
                    <div class="col-2">
                        <p >On Sale Date:</p>
                    </div>
                    <div class="col-8">
                        <p>{{$single['sale_date']}}</a>
                    </div>
                </div>
                <hr>
            </div>
        </div>
    </div>
    @include('partials.footer')
</body>
</html>