<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sube</title>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    
    <link href='../https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/nifty.min.css" rel="stylesheet">
    <link href="../css/demo/nifty-demo-icons.min.css" rel="stylesheet">
    <link href="../css/demo/nifty-demo.min.css" rel="stylesheet">
    <link href="../plugins/magic-check/css/magic-check.min.css" rel="stylesheet">
    <script src="../js/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/nifty.min.js"></script>
    <script src="../js/demo/bg-images.js"></script>
    
</head>
<body>
    
    <div id="container" class="cls-container">
        <div id="bg-overlay"></div>
        <div class="cls-content">
            <div class="cls-content-sm panel">
                <div class="panel-body">
                <div class="card-header">{{ __('Reset Password') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('password.update') }}">
                            @csrf

                            <input type="hidden" name="token" value="{{ $token }}">

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ $email ?? old('email') }}" required autofocus>

                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Reset Password') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>   

        <div class="demo-bg">
                <div id="demo-bg-list">
                    <div class="demo-loading"><i class="psi-repeat-2"></i></div>
                    <img class="demo-chg-bg bg-trans active" src="../img/bg-img/thumbs/bg-trns.jpg" alt="Background Image">
                    <img class="demo-chg-bg" src="../img/bg-img/thumbs/bg-img-1.jpg" alt="Background Image">
                    <img class="demo-chg-bg" src="../img/bg-img/thumbs/bg-img-2.jpg" alt="Background Image">
                    <img class="demo-chg-bg" src="../img/bg-img/thumbs/bg-img-3.jpg" alt="Background Image">
                    <img class="demo-chg-bg" src="../img/bg-img/thumbs/bg-img-4.jpg" alt="Background Image">
                    <img class="demo-chg-bg" src="../img/bg-img/thumbs/bg-img-5.jpg" alt="Background Image">
                    <img class="demo-chg-bg" src="../img/bg-img/thumbs/bg-img-6.jpg" alt="Background Image">
                    <img class="demo-chg-bg" src="../img/bg-img/thumbs/bg-img-7.jpg" alt="Background Image">
                </div>
        </div>
        </div>
        </div>
</body>
</html>

        

