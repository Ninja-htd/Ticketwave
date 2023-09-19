<!doctype html>
<html lang="fr">

<head>
  <title>Connexion</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"  style="text-align:center; background: #125aeb; color:#fff;">{{ __('Connexion') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Address E-mail ') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Mot de passe') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Se souvenir de moi') }}
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 offset-md-4">
                        @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Mot de passe oublié ?') }}
                                    </a>
                                    <a href="{{ route('register') }}" style="position:relative; top: 2px;">
                                     {{ __("S'inscrire") }}
                                    </a>
                                @endif
                                </div>
                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Connecter') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<footer>
<div class="address">
    <h3>Adresse</h3>
    <p>Cotonou, Abglangandan</p>
    <p>Tel: +229 97566439</p>
    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;+22998366038</p>
  </div>
  <div class="social">
    <h3>Réseaux sociaux</h3>
    <ul>
      <li><a href="#">Facebook</a></li>
      <img src="media/facebook.png" width="25" alt="" class="img1">
      <li><a href="https://www.youtube.com/channel/UCQEEij_QPvyuBwYPE2HKLFw">YouTube</a></li>
      <img src="media/icons8-lecture-de-youtube-48.png" width="30" alt="" class="img2">
      <li><a href="#">Twitter</a></li>
      <img src="media/twitter.png" width="25" alt="" class="img3">
    </ul>
  </div>
  <div class="copyright">
    <p>&copy; TickeWave - Tous droits réservés <?php echo date("Y"); ?></p>
  </div>
</footer>
@endsection
  <header>
  <marquee behavior="" direction="left" scrollamount="3"><p><span>INFO:</span>&nbsp;Acheter vos tickets la veille avant 17h merci.</p></marquee>
  </header>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>
