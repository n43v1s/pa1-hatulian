<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="{{url('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('assets/allCss/akun.css')}}">
</head>
<body>
    <main>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 d-none d-md-block image-container"></div>
                <div class="col-lg-6 col-md-6 form-container">
                    <div class="col-lg-8 col-md-12 col-sm-9 col-xs-12 form-box text-center">
                        <div class="logo mb-3">
                            <img src="../../assets/svg/user.svg" width="50px">
                        </div>
                        <div class="heading mb-4">
                            <h4>login into your account</h4>
                        </div>
                            @if (session('status'))
                                <div class="alert alert-success text-center">
                                    {{session('status')}}
                                </div>
                            @endif
                        <form action="/login" method="post">
                            @csrf
                            <div class="form-input">
                                <span>
                                    <img src="../../assets/svg/user-alt.svg" width="25px">
                                </span>
                                <input type="text" name="username" placeholder=" username">
                                @if ($errors->has('username'))
                                    <p style="color:red;">
                                        {{$errors->first('username')}}
                                    </p>
                                @endif
                            </div>
                            <div class="form-input">
                                <span>
                                    <img src="../../assets/svg/lock.svg" width="25">
                                </span>
                                <input type="password" name="password" placeholder=" password">
                                @if ($errors->has('password'))
                                    <p style="color:red;">
                                        {{$errors->first('password')}}
                                    </p>
                                @endif
                            </div>
                            <div class="text-left mb-3">
                                <button type="submit" class="btn">Login</button>
                            </div>
                            <div class="text-center mb-2">
                                <div class="mb-3" style="color: #777">
                                    <a href="{{url('akun/register')}}">Tidak Punya akun</a>
                                </div>
                            </div>
                            @if (session('state'))
                                <div class="alert alert-danger text-center">
                                    {{session('state')}}
                                </div>
                            @endif
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>
