<!doctype html>
<html lang="fr">

<head>
@if(Auth:: user()->rule =='USER')
  <title>Mon compte</title>
@else
<title>Profil administrateur </title>
@endif
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <link rel="stylesheet" href="Profil_user.css">
  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body id="dybo">
@if(Auth:: user()->rule =='USER')
  <header>
  <marquee behavior="" direction="left" scrollamount="3"><p><span>INFO:</span>&nbsp;Acheter vos tickets la veille avant 17h merci.</p></marquee>
  </header>
@else
<header>
  </header>
  @endif
  @extends('layouts.app')

@section('content')
@if(Auth:: user()->rule =='USER')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <p style=" font-weigth: 150; font-size: 18px; text-align:center;">{{ __(' Bienvenue') }}  dans votre compte <span style="color: #000; font-weigth: 1100;">{{ Auth::user()->name}}</span></p>
               <div class="card">
                <!-- Profil users -->
<!-- Nav tabs -->
<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item" role="presentation">
    <button class="nav-link active" id="home-tab" style="color:#fff; background:#125aeb;" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Mon profil</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="profile-tab" style="color:#fff; background:#125aeb;" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Mes tickets</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="messages-tab" style="color:#fff; background:#125aeb;" data-bs-toggle="tab" data-bs-target="#messages" type="button" role="tab" aria-controls="messages" aria-selected="false">Notification</button>
  </li>
</ul>

<!-- Tab panes -->
<div class="tab-content">
  <div class="tab-pane active" id="home" role="tabpanel" aria-labelledby="home-tab"> 
     <br>
                   <h2 style="text-align:center;">Votre profil</h2>
                   <br>
                   <table class="table-bordered">
                    <tr>
                      <th>Nom:</th>
                      <th>
                         {{ Auth::user()->name}}
                        </th>
                    </tr>
                    <tr>
                      <th>E-mail:</th>
                      <th> 
                        {{ Auth::user()->email}}
                      </th>
                    </tr>
                    <tr>
                      <th>Date d'inscription:</th>
                      <th>{{ Auth::user()->created_at}}</th>
                    </tr>
                   </table>
                  </div>
<!-- Fin Profil -->

  <div class="tab-pane" id="profile" role="tabpanel" aria-labelledby="profile-tab"><br>
                    <a href="/lignes&tarifs" class="" style="display: flex; margin-left: 30%; padding: 5px; text-decoration:none; border-radius: 10px; color:#fff; background:#eb1329e3; width:fit-content;">Achetez vos tickets maintenant</a>
                     <div id="paiement_section"> 
                    @foreach(App\Models\paiement::all() as $paiement)
                     @if($paiement->email == Auth::user()->email || $paiement->nom == Auth::user()->name)
                     <div id="ticket">
                     <P style="width:fit-content;float:right;">Code: <strong>Tw-00-{{$paiement->id}}</strong></P>
                     <p><img src="media/Ticketwave.png" width="60" alt="">
		                   <h1>TICKETS TRANSPORT</h1></p>
		                   <p><strong>NOM</strong> <strong>PRENOM:</strong> {{$paiement->nom}} {{$paiement->prenom}}</p>
		                   <p><strong>LIGNE:</strong> {{$paiement->ville_de_depart}} à {{$paiement->ville_arriver}}</p>
		                   <p><strong>COMPAGNIE:</strong> {{$paiement->compagnie}}</p>
		                   <p><strong>Date:</strong> {{$paiement->created_at}}</p>
		                   <p style="text-align:right;"><strong>NET PAYÉ:</strong> ****</p>
                       <p style="color:red;"><strong style="color:#000;">NB:</strong> Le code rend votre ticket valable ne la partager pas.</p>
                   </div>
                   <button id="telechar" onclick="window.print()" >Télécharger votre Ticket</button>
                     @else
                     <h6 style="text-align:center; margin-top:10%;">Vous n'avez pas acheter de ticket pour l'instant.</h6>                     
                     @endif
                  @endforeach
                  </div>               
                </div>
<!-- Fin Mes tickets -->

  <div class="tab-pane" id="messages" role="tabpanel" aria-labelledby="messages-tab">
    <div class="justify-content-center">
      <div class="notification_section">
      @foreach(App\Models\Admin_info::all() as $notification)
       <div id="notification_section">
       <h3 style="color:red;">{{ $notification->titre}} </h3>
      <p id="contenu_notice">{{ $notification->contenu}}</p>
        <h6 id="contenu_notice">Publié le {{ $notification->created_at}}</h6>
      </div>
      <br>
      @endforeach
      </div>
     </div>
  </div>
<!-- Fin notification -->
<br>
</div>

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
<!-- Fin profil users -->


@else



<!-- Profil Administrateur -->
@if(session()-> has ('succes'))
           <div class="alert alert-success" style="text-align:center;" id="info_succes"> {{ session('succes')}} </div>
@endif
@if(session()-> has ('delete'))
           <div class="alert alert-success" id="info_succes" style="text-align:center;" id="userdelete_succes"> {{ session('delete')}} </div>
@endif
<p style="text-align:center; font-size: 25px;"><span style="font-size:23px;">B</span>onjour administrateur <span style="color:#125aeb; font-weigth: 900;">{{ Auth::user()->name}}</span></p>
<p style="width:600px;position:absolute;left:25%;word-wrap: break-word;" id="guide">Vous pouvez à  présent consulter tout les utilisateurs inscrient sur votre plateformes via <a href="#button2"><span style="color:#125aeb; font-weight:500;">tout les utilisateurs</span></a> , vous avez la possibilité d'informer tout les utilisateurs d'une promotion,réduiction via juste le menu latéral <a href="#button1"><span style="color:#125aeb; font-weight:500;">envoyez de message à tout les membres</span></a>, vous pouvez aussi vois tout les informations de <a href="#button1"><span style="color:#125aeb; font-weight:500;">réservations des utilisateurs</span></a> afin de mieux vous organiser pour la mise en place avant le voyage.Vous verrez également tout les messages des utilisateur dans <a href="#button3"><span style="color:#125aeb; font-weight:500;">messages des utilisateurs</span></a> et ainsi donc vous pouvez les contacter afin de répondre à leurs requetes.</p>

<div style="heigth: 120vh; padding: 10px;background: #ddd; border-radius:15px; box-shadow: 0 20px 20px rgb(0,0,0,.6);  width: 200px;margin-top: -70px; position:relative;">
<ul class="nav nav-btn flex-column"  style="">
<a name="button0" id="button0" onclick="accueil()" class="btn btn-primary nav-link" href="/home" role="button" style="width: 150px; color: #ddd; border:none; margin-left: 15px; font-weigth: 800; box-shadow: 0 20px 20px rgb(0,0,0,.6);cursor:pointer;">Accueil</a>
&nbsp;
<button name="button1" id="button5" onclick="ticket()" class="btn btn-primary nav-link" type="button" role="button" style="width: 150px; color: #ddd; border:none; margin-left: 15px; font-weigth: 800; box-shadow: 0 20px 20px rgb(0,0,0,.6);cursor:pointer;">Tout les tickets vendus</button>
&nbsp;
<a name="button1" id="button2" onclick="utilisateur()" class="btn btn-primary nav-link" href="javascript:void(0)" role="button" style="width: 150px; color: #ddd; border:none; margin-left: 15px; font-weigth: 800; box-shadow: 0 20px 20px rgb(0,0,0,.6);cursor:pointer;">Tout les utilisateurs</a>
&nbsp;
<a name="button1" id="button3" onclick="preoccupation()" class="btn btn-primary nav-link" href="javascript:void(0)" role="button" style="width: 150px; color: #ddd; border:none; margin-left: 15px; font-weigth: 800; box-shadow: 0 20px 20px rgb(0,0,0,.6);cursor:pointer;">Messages des utilisateurs</a>
&nbsp;
<button name="button1" id="button4" onclick="message()" class="btn btn-primary nav-link" type="button" role="button" style="width: 150px; color: #ddd; border:none; margin-left: 15px; font-weigth: 800; box-shadow: 0 20px 20px rgb(0,0,0,.6);cursor:pointer;">Envoyez de message à tout les membres</button>
</ul>
</div>
<!-- All users -->
<section id="section_users">
<h4 style="text-align:center;">Utilisateurs actifs et leurs Rôles</h4>
 @foreach(App\Models\User::all() as $utilisateur)
   <div id="users">
     <br>
    <h5>Identifiant de l'utilisateur: <span style="padding:5px; color:#fff; background:#125aeb; border-radius: 50px;">{{ $utilisateur->id}}</span></h5>
    <h5>Nom de l'utilisateur: <span style=" color:#125aeb;">{{ $utilisateur->name}}</span></h5>
    <h5>E-mail de l'utilisateur: <span style=" color:#125aeb;">{{ $utilisateur->email}}</span></h5>
    <h5>Rôle de l'utilisateur: <span style=" color:#125aeb;">{{ $utilisateur->rule}}</span></h5>
    <h5>Date d'enregistrement de l'utilisateur: <span style=" color:#125aeb;">{{ $utilisateur->created_at}}</span></h5>
   </div>
   <br>
   @endforeach
  </section>
<!-- Info form -->
<div style="position: relative;">
<div id="login-box">
        <form action="/home" method="post">
        <h2>Message aux utilisateurs</h2>
           @csrf
            <div class="user-box">
                <label>Titre de L'information</label>
                <input type="text" name="titre" id="titre" class="form-control" required>
            </div>
            <div class="user-box">
                <label>Message</label>
                <textarea name="contenu" id="contenu" class="form-control" required placeholder="Tapez ici..."></textarea>
            </div>
            <input type="submit" name="envoyez" id="envoyez" value="Envoyez" class="form-control">
        </form>
    </div>
</div>
<!-- Help contact members -->
<section id="section_preoccupation">
<h4 style="text-align:center;">PÉOCCUPATION DES MEMBRES</h4>
 @foreach(App\Models\contact::all() as $contact)
   <div id="users">
     <br>
    <h5>E-mail de l'utilisateur:</h5>  <p style=" color:#125aeb; height:auto;word-wrap: break-word;">{{ $contact->email}}</p>
    <h5>Message de l'utilisateur:</h5><p style=" color:#125aeb; word-wrap: break-word;">{{ $contact->message}}</p>
    <h6>Date du message: <span style=" color:#125aeb;">{{ $contact->created_at}}</span></h6>
   </div>
   <br>
   @endforeach
  </section>
  <!-- All ticket sell -->
<section id="section_paiement">
<h3 style="text-align:center;">TOUT LES ACHATS VALIDÉ </h3>
@foreach(App\Models\paiement::all() as $paiement)
<div class="paiement">
  <span style="color:#fff;background:green;padding:5px; border-radius:10px; float:right;">PAYÉ</span>
  <h5 class="col-md3">IDENTIFIANT DU CLIENT: <span style=" color:#125aeb; padding:5px;border-radius:50px; width:20px;">{{$paiement->id}}</span></h5>
  <h5 class="col-md3">NOM: <span style=" color:#125aeb; width:fit-content;">{{$paiement->nom}}</span></h5>
  <h5 class="col-md3">PRENOM: <span style=" color:#125aeb; width:fit-content;">{{$paiement->prenom}}</span></h5>
  <h5 class="col-md3">EMAIL: <span style=" color:#125aeb; width:fit-content;word-wrap: break-word;">{{$paiement->email}}</span></h5>
  <h5 class="col-md3">NOMBRES DE TICKETS: <span style=" color:#125aeb; width:fit-content;">{{$paiement->nombre_ticket}}</span></h5>
  <h5 class="col-md3">LIGNE DE VOYAGE: <span style=" color:#125aeb; width:fit-content;">{{$paiement->ville_de_depart}}</span> à <span style=" color:#125aeb; width:fit-content;">{{$paiement->ville_arriver}}</span></h5>
  <h5 class="col-md3">COMPAGNIE: <span style=" color:#125aeb; width:fit-content;">{{$paiement->compagnie}}</span></h5>
  <h5 class="col-md3">DATE DU VOYAGE: <span style=" color:#125aeb; width:fit-content;">{{$paiement->date}}</span></h5>
  <h5 class="col-md3">DATE D'ACHAT: <span style=" color:#125aeb; width:fit-content;">{{$paiement->created_at}}</span></h5>
</div>  
<br>
  @endforeach
</section>
<br>
<br>
<footer>
    &copy; Tous droits réservés <?= date("Y") ?>
</footer>
@endif
<!--Fin Profil Administrateur -->
@endsection
<script src="Profil_user.js"></script>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>
</html>
