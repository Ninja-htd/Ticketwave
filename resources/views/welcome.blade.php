<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="Style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
        <title>TicketWave</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    </head>
    <header>
        <marquee behavior="" direction="left" scrollamount="3"><p><span>INFO:</span>&nbsp;Acheter vos tickets la veille avant 17h merci.</p></marquee>
    </header>
    <body class="antialiased">
        <video loop  muted autoplay plays-inline  id="back_video">
            <source src="media/autobus-135512.mp4" type="video/mp4">
        </video>
    <a href=""><img src="media/Ticketwave.png" width="90" alt="" id="logo"></a>
    <br>
    @if(Auth::user())
    <div style="position:absolute; width:fit-content; color:#fff; right:3px;top:75px;">
        <a class="dropdown-item" href="{{ route('logout') }}"
        onclick="event.preventDefault();
            document.getElementById('logout-form').submit();" id="deconnecter">
        <img src="media/logout (1).png" alt="" width="30" title="Déconneter" style="position:relative; top: 15px; rotate: 1deg;">
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
    <li><a href="">Accueil</a></li>
    <li><a href="/reservation">Réservez maintenant</a></li>
    <li><a href="/compagnie">Êtes-vous une compagnie ?</a></li>
    <li><a href="/contact">Contactez-nous</a></li>
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
 <br>
<div class="bloc-form">
  <form action="">
    <label for="ville1">Ville de départ</label>
    <input type="text" name="" id="ville1"  list="pays">
    &nbsp;
    <img src="media/exchange.png" width="20" alt="">
    &nbsp;
    <label for="ville2" class="ville2">Ville d'arriver</label>
    <input type="text" name="" id="ville2"  list="vill">
<button onclick="voir()" type="button" id="voir_tarif">Voir le tarif</button>
<h3 id="tarifs"></h3>
</form>
</div>

<datalist  id="pays">
<option for="Cotonou" id="opt1">Cotonou</option>
<option for="Porto-novo" id="opt2">Porto-novo</option>
<option for="Bohicon" id="opt3">Bohicon</option>
<option for="Savalou" id="opt4">Savalou</option>
<option for="Dassa" id="opt5">Dassa</option>
<option for="Bassila" id="opt6">Bassila</option>
</datalist>
<datalist  id="vill">
<option for="Cotonou" id="opt1">Cotonou</option>
<option for="Porto-novo" id="opt2">Porto-novo</option>
<option for="Bohicon" id="opt3">Bohicon</option>
<option for="Savalou" id="opt4">Savalou</option>
<option for="Dassa" id="opt5">Dassa</option>
<option for="Bassila" id="opt6">Bassila</option>
</datalist>
<br>
<br>
<div id="section">
    <p>
    Vous êtes un passionné du voyage, vous savez à quel point la planification de vos voyages peut être excitante. Mais pour que votre voyage se déroule sans accroc, il est important de réserver vos billets à l'avance. Cela vous permet non seulement de bénéficier de tarifs avantageux, mais également d'assurer votre place pour le voyage que vous souhaitez entreprendre.
    </p>
</div>
<div class="imgg">
  <p style="position:relative; margin-bottom:40px;"><button onclick="fermer()" style="position:absolute;border:none; outline:none; color:red; right: 0px; top:-3px; border-radius: 20px;">X</button></p>
  <h5 style="text-align:center; color:red;">Obtenez une réduction de 2% sur vos achats de ticket.</h5>
   <p>Voyager à moindre coût tout en faisant des tâches très simple</p>
       <a href="#" style="text-align:center; padding: 5px; border-radius:10px; color:#fff; background: red; text-decoration:none; margin-left: 40%;">Cliquez ici</a>
</div>
<br>
<a href="/reservation" class="Buttona">Achetez maintenant vos tickets</a>
<br>
<br>
<h2 style="text-align: center; font-size: 20px;">Pourquoi-nous ?</h2>
<br>
<br>
<section>
    <div>
     <img src="media/time.png" width="60" alt="">
     <h3>Gagnez du temps</h3>
     <p>Tout vos agences de voyage se trouvent désormais dans votre téléphone alors, plus besoin d'aller d'argences en agnces pour vous informer de la disponibilité des places dans les bus.</p>
    </div>
     &nbsp;
    <div>
     <img src="media/cell-phone.png" width="80"  height="65" alt="">
     <h3>Rapide et facile</h3>
     <p>Prenez votre téléphone et tapez juste  <a href="#">Www.ticketwave.org</a> et commencez à planier vos voyages en étant chez vous.</p>
    </div>
    &nbsp;  
    <div>
     <img src="media/telephone-handle-silhouette.png" width="60" height="55" alt="">
     <h3>Urgence ?</h3>
     <p>En cas d'urgence de dernières minute , plus jamais de stress. Vous pouvez passez coup de fil pour rechercher les bus qui sont immédiatement disponible ou pour autres préoccupations tout les contacts sont sur notre site.</p>
    </div>
</section>
<h3 style="text-align:center;font-size:23px;">Notre équipe</h3>
<br>
  <div class="carousel-inner">
    <div>
      <img src="media/Capture.png" class="d-block w-50" width="100" height="145" alt="...">
      <p style="text-align:center;"> BACHABI abdou kowiyou développeur Web fullstack</p>
    </div>
    <div>
      <img src="media/IMG-20230522-WA0041.jpg" class="d-block w-50" height="145" width="100" alt="...">
      <p style="text-align:center;">EUSTACHE chef marketing </p>
    </div>
    <div>
      <img src="media/IMG-20230522-WA0047.jpg" class="d-block w-50" height="145" width="100" alt="...">
      <p style="text-align:center;">NIDAL directeur général</p>
    </div>
  </div>
<br>
<h4 style="margin-left: 10px;">Nos partenaires</h4>
<div class="partenaire">
   <img src="media/ATT.png" alt="" width="140">
   <img src="media/STM.png" alt="" width="140">
   <img src="media/Baobab.png" alt="" width="140">
</div>
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
<script src="welcome.js"></script>
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
