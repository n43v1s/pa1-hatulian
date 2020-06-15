<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
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
                            <h4>Tambahkan Diri anda!</h4>
                        </div>
                        <form action="/register/proses" method="post">
                            @csrf
                            <div class="form-input">
                                <span>
                                    <img src="../../assets/svg/user.svg" width="25px">
                                </span>
                                <input type="text" name="nama" placeholder=" nama" value="{{ old('nama')}}">
                                @if ($errors->has('nama'))
                                    <p style="color:red;">
                                        {{$errors->first('nama')}}
                                    </p>
                                @endif
                            </div>
                            <div class="form-input">
                                <span>
                                    <img src="../../assets/svg/envelope.svg" width="25px">
                                </span>
                                <input type="text" name="email" placeholder=" email" value="{{ old('email')}}">
                                @if ($errors->has('email'))
                                    <p style="color:red;">
                                        {{$errors->first('email')}}
                                    </p>
                                @endif
                                @if (session('email'))
                                    <p style="color:red;">
                                        {{session('email')}}
                                    </p>
                                @endif
                            </div>
                            <div class="form-input">
                                <div class="d-inline mr-5">
                                    <label for="laki-laki">Jenis kelamin</label>
                                </div>
                                <div class="custom-control custom-radio d-inline">
                                    <input type="radio" id="laki-laki" name="jenisKelamin" class="custom-control-input" value="L" >
                                    <label class="custom-control-label" for="laki-laki">Laki-laki</label>
                                </div>
                                <div class="custom-control custom-radio d-inline">
                                    <input type="radio" id="perempuan" name="jenisKelamin" class="custom-control-input" value="P">
                                    <label class="custom-control-label" for="perempuan">Perempuan</label>
                                </div>
                                @if ($errors->has('jenisKelamin'))
                                    <p style="color:red;">
                                        {{$errors->first('jenisKelamin')}}
                                    </p>
                                @endif

                            </div>
                            <div class="form-input">
                                <span>
                                    <img src="../../assets/svg/user-alt.svg" width="25px">
                                </span>
                                <input type="text" name="username" placeholder=" username" value="{{ old('username')}}">
                                @if ($errors->has('username'))
                                    <p style="color:red;">
                                        {{$errors->first('username')}}
                                    </p>
                                @endif
                                @if (session('username'))
                                    <p style="color:red;">
                                        {{session('username')}}
                                    </p>
                                @endif
                            </div>
                            <div class="form-input">
                                <span>
                                    <img src="../../assets/svg/lock.svg" width="25">
                                </span>
                                <input type="password" name="password" placeholder=" password" value="{{ old('password')}}">
                                @if ($errors->has('password'))
                                    <p style="color:red;">
                                        {{$errors->first('password')}}
                                    </p>
                                @endif
                            </div>
                            <div class="form-input">
                                <span>
                                    <img src="../../assets/svg/lock-open.svg" width="25">
                                </span>
                                <input type="password" name="konfirmasiPassword" placeholder=" konfirmasiPassword" value="{{ old('konfirmasiPassword')}}">
                                @if ($errors->has('konfirmasiPassword'))
                                    <p style="color:red;">
                                        {{$errors->first('konfirmasiPassword')}}
                                    </p>
                                @endif
                            </div>
                            <div class="text-left mb-3">
                                <button type="submit" class="btn btn-success p-2" name="submit">Daftar</button>
                            </div>
                            <div class="text-center mb-2">
                                <div class="mb-3" style="color: #777">
                                    <a href="{{url('akun')}}">Sudah Punya akun</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>
