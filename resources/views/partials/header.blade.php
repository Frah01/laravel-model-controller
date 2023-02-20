<!DOCTYPE html>
<html lang="en">
<head>
    @vite('resources/js/app.js')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <header>
      <div class="container-fluid bg-primary">
        <div class="container">
          <div class="row">
            <div class="col">
              <div class="d-flex justify-content-end ">
                <p class="text-white mx-2 text-uppercase">dc power visa</p>
                <p class="text-white text-uppercase">additional dc sites</p>
              </div>
            </div>
          </div>

        </div>
      </div>
        <nav class="navbar bg-body-tertiary">
            <div class="container">
              <a class="navbar-brand" href="#">
                <img src="{{Vite::asset('resources/img/dc-logo.png')}}" >
              </a>
              <ul class="list-unstyled d-flex flex-wrap">
                @foreach ($menu as $item)
                <li class="mx-2 text-uppercase fw-semibold">
                  {{$item}}
                </li>
                @endforeach
              </ul>
              <div class="search-box">
                <input type="text" class="input-search" placeholder="Search...">
              </div>
            </div>
          </nav>
    </header>
</body>
</html>