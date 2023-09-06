
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Option 1: CoreUI for Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/@coreui/coreui@4.2.0/dist/css/coreui.min.css" rel="stylesheet" integrity="sha384-UkVD+zxJKGsZP3s/JuRzapi4dQrDDuEf/kHphzg8P3v8wuQ6m9RLjTkPGeFcglQU" crossorigin="anonymous">

    <!-- Option 2: CoreUI PRO for Bootstrap CSS -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/@coreui/coreui-pro@4.4.2/dist/css/coreui.min.css" rel="stylesheet" integrity="sha384-bzkAC/Q2gW5/slRL3Jgj3JsccUWhLg6Rz8kyA0B/9Yv1Ed34/b5NrdYqFIkokjId" crossorigin="anonymous"> -->

    <title>Sofifi | login</title>
  </head>
  <body class="app flex-row">
    <div class="bg-light min-vh-100 d-flex flex-row align-items-center">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-4">
            <div class="card-group d-block d-md-flex row">
              <div class="card col-md-5 p-4 mb-0">
                <div class="card-body">
                  <form action="{{ route('cek-login')}}" method="post">
                    <h1>Login</h1>
                    <p class="text-medium-emphasis">Sign In to your account</p>
                    {{-- error mesage --}}
                    @if ($errors->any())
                      <div class="alert alert-danger" role="alert">
                        @foreach ($errors->all() as $er)
                            <div>{{ $er }}</div>
                        @endforeach
                      </div>
                    @endif
                    @csrf
                    <div class="input-group mb-3"><span class="input-group-text">
                        <svg class="icon">
                          <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-user"></use>
                        </svg></span>
                      <input class="form-control" name='email' type="text" placeholder="Username">
                    </div>
                    <div class="input-group mb-4"><span class="input-group-text">
                        <svg class="icon">
                          <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-lock-locked"></use>
                        </svg></span>
                      <input class="form-control" name="password" type="password" placeholder="Password">
                    </div>
                    <div class="row">
                      <div class="col-6">
                        <button class="btn btn-primary px-4" type="submit">Login</button>
                      </div>
                      {{-- <div class="col-6 text-end">
                        <button class="btn btn-link px-0" type="button">Forgot password?</button>
                      </div> --}}
                    </div>
                  
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
