<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}} ">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('images/logo.png')}}">

    <title>Login</title>
    <style>
        body {
            font-family: sans-serif, serif; 
            color: white;
        }
        small {
            font-size: 1.1em;
        }
        .button {
            background-color: #fff;
            color: #000;
        }
        .sidebar {
            padding: 5em 1em;
            height: 100vh; 
            background-color: #f9ae55;
        }

        .image {
            background-repeat: no-repeat;
            background-image: url('images/bgc.png');
            background-size:cover;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 col-sm-4 sidebar">
                <center>
                    <img src="{{asset('images/logo-white.png')}} " width="100" height="100" alt="logo-white">
                    <br>
                    <small>Bienvenue dans votre gestionnaire de courrier</small>
                    <br><br>
                </center>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Entrez votre email" aria-describedby="emailHelp" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="password">Mot de passe</label>
                            <input type="password" id="password" name="password" class="form-control  @error('password') is-invalid @enderror" id="password" placeholder="Entrez votre mot de passe" required autocomplete="current-password">
                            
                            @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                        </div>
                        <button type="submit" class="btn button">Se connecter</button>
                        @if (Route::has('password.request'))
                            <a class="text-light ml-3" href="{{ route('password.request') }}">
                                {{ __(' Mot de passe oublié ?') }}
                            </a>
                        @endif
                    </form>
            </div>
            <div class="col-md-9 col-sm-8 image">

            </div>
        </div>
        {{-- <div class="sidebar">

        </div>
        <div class="image">

        </div> --}}
    </div>
    <script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
</body>
</html>