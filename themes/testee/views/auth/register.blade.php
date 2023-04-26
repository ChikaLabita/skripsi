<!DOCTYPE html>
<html>

<head>
    <title>Register</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Custom Google font-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@100;200;300;400;500;600;700;800;900&amp;display=swap"
        rel="stylesheet" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-white py-3">
        <div class="container px-5">
            <a class="navbar-brand" href="{{ url('/') }}"><span class="fw-bolder text-primary">Test 16PF</span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 small fw-bolder">
                    <li class="nav-item"><a class="nav-link" href="{{ url('/admin/login') }}">Admin Login</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="container">
            <div class="row">
                <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                    <div class="card border-0 shadow rounded-3 my-5">
                        <div class="card-body p-4 p-sm-5">
                            <h5 class="card-title text-center mb-5 fw-dark fs-5">
                                <img src="https://www.nicepng.com/png/detail/128-1280406_view-user-icon-png-user-circle-icon-png.png"
                                    class="rounded-circle" style="width: 100px;" alt="Avatar" /><br>
                                REGISTER
                            </h5>
                            <form action="{{ route('register') }}" method="POST">
                                @csrf
                                <div class="col-md-12 mb-2">
                                    <label>Full Name</label>
                                    <input type="text" class="form-control" id="fullname" placeholder="Full name"
                                        name="fullname" value="{{old('fullname')}}">
                                    @error('fullname')
                                    <small id="fullname" class="text-danger">{{$message}}</small>
                                    @enderror
                                </div>
                                <div class="col-md-12 mb-2">
                                    <label for="gender">Gender</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gender" value="male" checked>
                                        <label class="form-check-label" for="male">
                                            Male
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gender" value="female">
                                        <label class="form-check-label" for="female">
                                            Female
                                        </label>
                                    </div>
                                    @error('gender')
                                    <small id="gender" class="text-danger">{{$message}}</small>
                                    @enderror
                                </div>
                                <div class="col-md-12 mb-2">
                                    <label>Age</label>
                                    <input type="text" class="form-control" id="age" placeholder="Age" name="age"
                                        value="{{old('age')}}">
                                    @error('age')
                                    <small id="age" class="text-danger">{{$message}}</small>
                                    @enderror
                                </div>
                                <div class="col-md-12 mb-2">
                                    <label>Education</label>
                                    <input type="text" class="form-control" id="education" placeholder="Education"
                                        name="education" value="{{old('education')}}">
                                    @error('education')
                                    <small id="education" class="text-danger">{{$message}}</small>
                                    @enderror
                                </div>
                                <div class="col-md-12 mb-2">
                                    <label>Username</label>
                                    <input type="text" class="form-control" id="username" placeholder="Username"
                                        name="username" value="{{old('username')}}">
                                    @error('username')
                                    <small id="username" class="text-danger">{{$message}}</small>
                                    @enderror

                                </div>
                                <div class="col-md-12 mb-2">
                                    <label>Password</label>
                                    <input type="password" class="form-control" id="password"
                                        placeholder="Password" name="password">
                                    @error('password')
                                    <small id="password" class="text-danger">{{$message}}</small>
                                    @enderror
                                </div>
                                <div class="col-md-12 mb-2">
                                    <label>Confirm Password</label>
                                    <input id="password-confirm" type="password" class="form-control"
                                        name="password_confirmation" autocomplete="new-password"
                                        placeholder="Confirm Password">
                                    @error('password')
                                    <small id=" passwordid" class="text-danger">{{$message}}</small>
                                    @enderror
                                </div>
                                <div class="d-grid">
                                    <button class="btn btn-primary btn-login text-uppercase fw-bold"
                                        type="submit">Register</button>
                                    <p><br>Have an account?
                                        <a class="link-danger" href="{{ route('login') }}">Login</a>
                                    </p>
                                </div>
                                <div class="d-grid">
                                    <a href="{{ url('/') }}">Back Home</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</body>

</html>