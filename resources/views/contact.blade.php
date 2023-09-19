<!doctype html>
<html lang="fr">

<head>
  <title>Contact</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="contact.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
 <header>
  </header>
<body>
<a href="/welcome"><img src="media/Ticketwave.png" width="90" alt="" id="logo"></a>
    <br>
    @if(Auth::user())
    <div style="position:absolute; width:fit-content; color:#fff; right:4px;top:25px;">
        <a class="dropdown-item" href="{{ route('logout') }}"
        onclick="event.preventDefault();
            document.getElementById('logout-form').submit();" id="deconnecter">
        <img src="media/logout.png" alt="" width="30" title="Déconneter" style="position:relative; top: 15px; rotate: 1deg;">
    </a>
      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
     </form>
    </div>
    @else
    @endif
  <nav>
    <br>
 <ul>
    <li><a href="/welcome">Accueil</a></li>
    <li><a href="/reservation">Réservez maintenant</a></li>
    <li><a href="/compagnie">Êtes-vous une compagnie ?</a></li>
 </ul>
 <img src="media/user-286.png" alt="" width="50" id="user_img">
    <div id="auth">
            @if (Route::has('login'))
                    @auth
                    @if(Auth::user()->rule == 'USER')
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Mon profil</a>
                        @else
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Tableaux de bord</a>
                       @endif
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Se connecter</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">S'inscrire</a>
                        @endif
                    @endauth
            @endif
     </div>
 </nav>
 @if(session()-> has ('succes'))
  <div class="alert alert-success" style="text-align:center;"> {{ session('succes')}} </div>
  @endif
 <br>
<div id="secteur">
<div class="reseaux">
<p>Adresse E-mail: ticketswave@gmail.com</p>
</div>
    <div  class="form">
    <form action="/contact" method="post">
        @csrf
        <label for="">E-mail</label>
        <input type="email" name="email" id="email"  required>
        <label for="">Message</label>
        <textarea name="message" id="message"   required></textarea>
        <input type="submit" value="Envoyez" name="envoyer" id="envoyer" >
    </form>
    </div>
</div>
<br>

<div class="urgent">
  <div>
    <h4>Urgence</h4>
    <a href="https://wa.me/message/ZAJY3AJKU43HC1"><img src="media/help.png" width="50" alt=""></a>
  </div>
</div>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
  <script src="contact.js"></script>
</body>
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
</html>