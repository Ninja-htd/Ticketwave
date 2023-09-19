<!doctype html>
<html lang="fr">
<head>
  <title>lignes et tarifs</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 <link rel="stylesheet" href="lignes&tarifs.css">
  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
 <header>
 <marquee behavior="" direction="left" scrollamount="3"><p><span>INFO:</span>&nbsp;Acheter vos tickets la veille avant 17h merci.</p></marquee>
</header>
<body>
<a href="/welcome"><img src="media/Ticketwave.png" width="90" alt="" id="logo"></a>
    <br>
    @if(Auth::user())
    <div style="position:absolute; width:fit-content; color:#fff; right:3px;top:75px;">
        <a class="dropdown-item" href="{{ route('logout') }}"
        onclick="event.preventDefault();
            document.getElementById('logout-form').submit();" id="deconnecter">
        <img src="media/logout.png" alt="" width="30" title="Déconneter" style="position:relative; top: 15px;left: ; rotate: 1deg;">
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
  <div id="section">
    <p>Comparer les différents prix et options de voyage disponibles pour choisir celui qui convient le mieux à vos besoins et à votre budget.</p>
  </div>
  @if(session()-> has ('paiement'))
  <div class="alert alert-success" style="width:auto; text-align:center;"> {{ session('paiement')}} </div>
  @endif
  <br>
  <section>
<div id="form_div">
  <a href="javascript:void(0)"id="achat1">Achetez un tickets pour cette ligne</a>
    <p>Cotonou <img src="media/bus.png" width="100" alt="" style="margin-right: -9px;"> Porto-novo</p>
    <p id="second">
       Les bus allant à porto-novo démarrent à  six heure trente minute <span style="text-align:center; color:red; font-weight: 400;">6h 30min</span>, nous vous conseillez d'être là trente minute avant le départ pour éviter tout retard et manque. Le trarif  s'éleve à
       <span style="text-align:center; color:red; font-weight: 400;">1500 Fcfa.</span>
    </p>
    <button type="button" id="plus" onclick="butt()">Plus de détails</button> &nbsp;
    <button type="button" id="moins">Voir moins</button>
    <section id="overlay">
      <div style="position:absolute; background:none; right: 20px; top: 5px; width:fit-content;box-shadow:none;">
        <button id="fermer1" type="button" title="Fermer">X</button>
      </div>
<form action="/lignes&tarifs" method="post">
 @csrf
   <h3>Formulaire d'achat</h3>
   <label for="nom">Nom</label><br>
   <input type="text" name="nom" class="input_nom1" id="nom" placeholder="AGOSSOU" required>
   <span style="color:red; text-align:center; display:none;" id="erreur_nom1">Nom trop long</span>
   <label for="prenom">prenom</label>
   <input type="text" name="prenom" class="input_prenom1" id="prenom" placeholder="Pascal" required>
   <label for="email">E-mail</label>
   <input type="text" name="email" id="email" placeholder="doe@gmail.com" required>
   <label for="text">Numéro whatsapp</label>
   <input type="number" name="numero" class="numero1" id="numero"  required>
   <span style="color:red; text-align:center; display:none;" id="erreur_numero1">Votre numéro de téléphone ne correspond pas</span>
   <label for="Nombre de tickets">Nombre de tickets</label>
   <input type="number" name="nombre_ticket" id="nombre_ticket" value="1"   placeholder="1" required>        
            <input type="hidden" value="Cotonou" name="ville_de_depart" id="ville_de_depart" Required>            
            <input type="hidden" name="ville_arriver" id="ville_arriver" value="Porto-novo" Required>
            <label for="Date de voyage">Date de voyage</label>
            <input type="date" name="date" id="date">
             <label for="compagnie">Quel compagnie de Bus voulez-vous ?</label>
             <select name="compagnie" id="compagnie" Required>
                <option value="ATT" id="opt1">ATT</option>
                <option value="BAOBAB" id="opt2">BAOBAB</option>
                <option value="STM" id="opt3">STM</option>
             </select>
             <br>
 <script src="https://cdn.fedapay.com/checkout.js?v=1.1.7"
   data-public-key="pk_live_RmUfMDu0hRF2RobTxfcg-gE5"
   data-button-text="Payer"
   data-button-class="button-class"
   data-transaction-amount="1500"
   data-transaction-description="Achat de ticket  de bus allant de cotonou à Porto-novo"
   data-currency-iso="XOF">
 </script>
</form>
</section>
</div>

<div id="form_div">
    <a href="javascript:void(0)" id="achat2">Achetez un tickets pour cette ligne</a>
    <p>Cotonou <img src="media/bus.png" width="100" alt="">Bohicon</p>
    <p id="second1">
       Les bus de cotonou allant à bohicon démarrent à  sept heure <span style="text-align:center; color:red; font-weight: 400;">7h</span>, nous vous conseillez d'être là trente minute avant le départ pour éviter tout retard et manque. Le trarif pour bohicon s'éleve à
       <span style="text-align:center; color:red; font-weight: 400;">3000 Fcfa.</span>
    </p>
    <button type="button" id="plus1" onclick="butt()">Plus de détails</button> &nbsp;
    <button type="button" id="moins1">Voir moins</button>
    <section id="overlay1">
      <div style="position:absolute; background:none; right: 20px; top: 5px; width:fit-content;box-shadow:none;">
        <button id="fermer2" type="button" title="Fermer">X</button>
      </div>
<form action="/lignes&tarifs" method="post">
 @csrf
   <h3>Formulaire d'achat</h3>
   <label for="nom">Nom</label><br>
   <input type="text" name="nom" class="input_nom2" id="nom" placeholder="AGOSSOU" required>
   <span style="color:red; text-align:center; display:none;" id="erreur_nom2">Nom trop long</span>
   <label for="prenom">prenom</label>
   <input type="text" name="prenom" class="input_prenom2" id="prenom" placeholder="Pascal" required>
   <label for="email">E-mail</label>
   <input type="text" name="email" id="email" placeholder="doe@gmail.com" required>
   <label for="text">Numéro whatsapp</label>
   <input type="number" name="numero" id="numero"  class="numero2" required>
   <span style="color:red; text-align:center; display:none;" id="erreur_numero2">Votre numéro de téléphone ne correspond pas</span>
   <label for="Nombre de tickets">Nombre de tickets</label>
   <input type="number"  id="nombre_ticket"  value="1" placeholder="1" required>
            <input type="hidden" value="Cotonou" name="ville_de_depart" id="ville_de_depart" Required>    
            <input type="hidden" name="ville_arriver" id="ville_arriver" value="Bohicon" Required>
            <label for="Date de voyage">Date de voyage</label>
            <input type="date" name="date" id="date">
             <label for="compagnie">Quel compagnie de Bus voulez-vous ?</label>
             <select name="compagnie" id="compagnie" Required>
                <option value="ATT" id="opt1">ATT</option>
                <option value="BAOBAB" id="opt2">BAOBAB</option>
                <option value="STM" id="opt3">STM</option>
             </select>
             <br>
 <script src="https://cdn.fedapay.com/checkout.js?v=1.1.7"
   data-public-key="pk_live_RmUfMDu0hRF2RobTxfcg-gE5"
   data-button-text="Payer"
   data-button-class="button-class"
   data-transaction-amount="3000"
   data-transaction-description="Achat de ticket  de bus allant de cotonou à Bohicon"
   data-currency-iso="XOF">
 </script>
</form>
</section>
</div>

<div id="form_div">
    <a href="javascript:void(0)" id="achat3">Achetez un tickets pour cette ligne</a>
    <p>Cotonou <img src="media/bus.png" width="100" alt="">Savalou</p>
    <p id="second2">
       Les bus de cotonou allant à salavou démarrent à  quinze heure <span style="text-align:center; color:red; font-weight: 400;">15h</span>, nous vous conseillez d'être là trente minute avant le départ pour éviter tout retard et manque. Le trarif  s'éleve à
       <span style="text-align:center; color:red; font-weight: 400;">3500 Fcfa.</span>
    </p>
    <button type="button" id="plus2" onclick="butt()">Plus de détails</button> &nbsp;
    <button type="button" id="moins2">Voir moins</button>
    <section id="overlay2">
      <div style="position:absolute; background:none; right: 20px; top: 5px; width:fit-content;box-shadow:none;">
        <button id="fermer3" type="button" title="Fermer">X</button>
      </div>
<form action="/lignes&tarifs" method="post">
 @csrf
   <!-- <img src="media/bus.png" width="100" alt=""> -->
   <h3>Formulaire d'achat</h3>
   <label for="nom">Nom</label><br>
   <input type="text" name="nom" class="input_nom3" id="nom" placeholder="AGOSSOU" required>
   <span style="color:red; text-align:center; display:none;" id="erreur_nom3">Nom trop long</span>
   <label for="prenom">prenom</label>
   <input type="text" name="prenom" class="input_prenom3" id="prenom" placeholder="Pascal" required>
   <label for="email">E-mail</label>
   <input type="text" name="email" id="email" placeholder="doe@gmail.com" required>
   <label for="text">Numéro whatsapp</label>
   <input type="number" name="numero" id="numero" class="numero3"  required>
   <span style="color:red; text-align:center; display:none;" id="erreur_numero3">Votre numéro de téléphone ne correspond pas</span>
   <label for="Nombre de tickets">Nombre de tickets</label>
   <input type="number"  id="nombre_ticket"  value="1" placeholder="1" required>
            <input type="hidden" value="Cotonou" name="ville_de_depart" id="ville_de_depart" Required>
            <input type="hidden" name="ville_arriver" id="ville_arriver" value="Savalou" Required>
            <label for="Date de voyage">Date de voyage</label>
            <input type="date" name="date" id="date">
             <label for="compagnie">Quel compagnie de Bus voulez-vous ?</label>
             <select name="compagnie" id="compagnie" Required>
                <option value="ATT" id="opt1">ATT</option>
                <option value="BAOBAB" id="opt2">BAOBAB</option>
                <option value="STM" id="opt3">STM</option>
             </select>
             <br>
 <script src="https://cdn.fedapay.com/checkout.js?v=1.1.7"
   data-public-key="pk_live_RmUfMDu0hRF2RobTxfcg-gE5"
   data-button-text="Payer"
   data-button-class="button-class"
   data-transaction-amount="3500"
   data-transaction-description="Achat de ticket  de bus allant de Cotonou à Savalou"
   data-currency-iso="XOF">
 </script>
</form>
</section>
</div>


<div id="form_div">
    <a href="javascript:void(0)" id="achat4">Achetez un tickets pour cette ligne</a>
    <p>Cotonou <img src="media/bus.png" width="100" alt="">Dassa</p>
    <p id="second3">
       Nos bus de cotonou allant à Dassa démarrent à huit heure <span style="text-align:center; color:red; font-weight: 400;">8h</span>, nous vous conseillez d'être là trente minute avant le départ pour éviter tout retard et manque. Le trarif  s'éleve à
       <span style="text-align:center; color:red; font-weight: 400;">4000 Fcfa.</span>
    </p>
    <button type="button" id="plus3" onclick="butt()">Plus de détails</button> &nbsp;
    <button type="button" id="moins3">Voir moins</button>

<section id="overlay3">
  <div style="position:absolute; background:none; right: 20px; top: 5px; width:fit-content;box-shadow:none;">
        <button id="fermer4" type="button" title="Fermer">X</button>
      </div>
<form action="/lignes&tarifs" method="post">
 @csrf
   <h3>Formulaire d'achat</h3>
   <label for="nom">Nom</label><br>
   <input type="text" name="nom" class="input_nom4" id="nom" placeholder="AGOSSOU" required>
   <span style="color:red; text-align:center; display:none;" id="erreur_nom4">Nom trop long</span>
   <label for="prenom">prenom</label>
   <input type="text" name="prenom" class="input_prenom4" id="prenom" placeholder="Pascal" required>
   <label for="email">E-mail</label>
   <input type="text" name="email" id="email" placeholder="doe@gmail.com" required>
   <label for="text">Numéro whatsapp</label>
   <input type="number" name="numero" id="numero"  class="numero4" required>
   <span style="color:red; text-align:center; display:none;" id="erreur_numero4">Votre numéro de téléphone ne correspond pas</span>
   <label for="Nombre de tickets">Nombre de tickets</label>
   <input type="number"  id="nombre_ticket"  value="1" placeholder="1" required>
            <input type="hidden" value="Cotonou" name="ville_de_depart" id="ville_de_depart" Required>    
            <input type="hidden" name="ville_arriver" id="ville_arriver" value="Dassa" Required>
            <label for="Date de voyage">Date de voyage</label>
            <input type="date" name="date" id="date">
             <label for="compagnie">Quel compagnie de Bus voulez-vous ?</label>
             <select name="compagnie" id="compagnie" Required>
                <option value="ATT" id="opt1">ATT</option>
                <option value="BAOBAB" id="opt2">BAOBAB</option>
                <option value="STM" id="opt3">STM</option>
             </select>
             <br>
 <script src="https://cdn.fedapay.com/checkout.js?v=1.1.7"
   data-public-key="pk_live_RmUfMDu0hRF2RobTxfcg-gE5"
   data-button-text="Payer"
   data-button-class="button-class"
   data-transaction-amount="4000"
   data-transaction-description="Achat de ticket  de bus allant de Cotonou à Dassa"
   data-currency-iso="XOF">
 </script>
</form>
</section>
</div>

<div id="form_div">
    <a href="javascript:void(0)" id="achat5">Achetez un tickets pour cette ligne</a>
    <p>Cotonou <img src="media/bus.png" style="margin-right: 5px;" width="100" alt="">Bassila</p>
    <p id="second4">
       Pour les bus allant de cotonou à bassila ils démarrent  six heure <span style="text-align:center; color:red; font-weight: 400;">6h</span>, nous vous conseillez d'être là trente minute avant le départ pour éviter tout retard et manque. Le trarif  s'éleve à
       <span style="text-align:center; color:red; font-weight: 400;">5000 Fcfa.</span>
    </p>
    <button type="button" id="plus4" onclick="butt()">Plus de détails</button> &nbsp;
    <button type="button" id="moins4">Voir moins</button>

<section id="overlay4">
  <div style="position:absolute; background:none; right: 20px; top: 5px; width:fit-content;box-shadow:none;">
        <button id="fermer5" type="button" title="Fermer">X</button>
      </div>
<form action="/lignes&tarifs" method="post">
 @csrf
   <!-- <img src="media/bus.png" width="100" alt=""> -->
   <h3>Formulaire d'achat</h3>
   <label for="nom">Nom</label><br>
   <input type="text" name="nom" class="input_nom5" id="nom" placeholder="AGOSSOU" required>
   <span style="color:red; text-align:center; display:none;" id="erreur_nom5">Nom trop long</span>
   <label for="prenom">prenom</label>
   <input type="text" name="prenom" class="input_prenom5" id="prenom" placeholder="Pascal" required>
   <label for="email">E-mail</label>
   <input type="text" name="email" id="email" placeholder="doe@gmail.com" required>
   <label for="text">Numéro whatsapp</label>
   <input type="number" name="numero" id="numero"  class="numero5" required>
   <span style="color:red; text-align:center; display:none;" id="erreur_numero5">Votre numéro de téléphone ne correspond pas</span>
   <label for="Nombre de tickets">Nombre de tickets</label>
   <input type="number"  id="nombre_ticket"  value="1" placeholder="1" required>
            <input type="hidden" value="Cotonou" name="ville_de_depart" id="ville_de_depart" Required>    
            <input type="hidden" name="ville_arriver" id="ville_arriver" value="Bassila" Required>
            <label for="Date de voyage">Date de voyage</label>
            <input type="date" name="date" id="date">
             <label for="compagnie">Quel compagnie de Bus voulez-vous ?</label>
             <select name="compagnie" id="compagnie" Required>
                <option value="ATT" id="opt1">ATT</option>
                <option value="BAOBAB" id="opt2">BAOBAB</option>
                <option value="STM" id="opt3">STM</option>
             </select>
             <br>
 <script src="https://cdn.fedapay.com/checkout.js?v=1.1.7"
   data-public-key="pk_live_RmUfMDu0hRF2RobTxfcg-gE5"
   data-button-text="Payer"
   data-button-class="button-class"
   data-transaction-amount="5000"
   data-transaction-description="Achat de ticket  de bus allant de Cotonou à Bassila"
   data-currency-iso="XOF">
 </script>
</form>
</section>
</div>

<div id="form_div">
    <a href="javascript:void(0)" id="achat6">Achetez un tickets pour cette ligne</a>
    <p>Porto-novo<img src="media/bus.png" width="100" alt="">Bohicon</p>
    <p id="second5">
       De porto-novo à bohicon nos bus démarrent à dix heure<span style="text-align:center; color:red; font-weight: 400;">10h</span>, nous vous conseillez d'être là trente minute avant le départ pour éviter tout retard et manque. Le trarif  s'éleve à
       <span style="text-align:center; color:red; font-weight: 400;">2000 Fcfa.</span>
    </p>
    <button type="button" id="plus5" onclick="butt()">Plus de détails</button> &nbsp;
    <button type="button" id="moins5">Voir moins</button>

<section id="overlay5">
  <div style="position:absolute; background:none; right: 20px; top: 5px; width:fit-content;box-shadow:none;">
        <button id="fermer6" type="button" title="Fermer">X</button>
      </div>
<form action="/lignes&tarifs" method="post">
 @csrf
   <h3>Formulaire d'achat</h3>
   <label for="nom">Nom</label><br>
   <input type="text" name="nom" class="input_nom6" id="nom" placeholder="AGOSSOU" required>
   <span style="color:red; text-align:center; display:none;" id="erreur_nom6">Nom trop long</span>
   <label for="prenom">prenom</label>
   <input type="text" name="prenom" class="input_prenom6" id="prenom" placeholder="Pascal" required>
   <label for="email">E-mail</label>
   <input type="text" name="email" id="email" placeholder="doe@gmail.com" required>
   <label for="text">Numéro whatsapp</label>
   <input type="number" name="numero" id="numero"  class="numero6" required>
   <span style="color:red; text-align:center; display:none;" id="erreur_numero6">Votre numéro de téléphone ne correspond pas</span>
   <label for="Nombre de tickets">Nombre de tickets</label>
   <input type="number"  id="nombre_ticket"  value="1" placeholder="1" required>
            <input type="hidden" value="Porto-novo" name="ville_de_depart" id="ville_de_depart" Required>    
            <input type="hidden" name="ville_arriver" id="ville_arriver" value="Bohicon" Required>
            <label for="Date de voyage">Date de voyage</label>
            <input type="date" name="date" id="date">
             <label for="compagnie">Quel compagnie de Bus voulez-vous ?</label>
             <select name="compagnie" id="compagnie" Required>
                <option value="ATT" id="opt1">ATT</option>
                <option value="BAOBAB" id="opt2">BAOBAB</option>
                <option value="STM" id="opt3">STM</option>
             </select>
             <br>
 <script src="https://cdn.fedapay.com/checkout.js?v=1.1.7"
   data-public-key="pk_live_RmUfMDu0hRF2RobTxfcg-gE5"
   data-button-text="Payer"
   data-button-class="button-class"
   data-transaction-amount="2000"
   data-transaction-description="Achat de ticket  de bus allant de Porto-novo à Bohicon"
   data-currency-iso="XOF">
 </script>
</form>
</section>
</div>

<div id="form_div">
    <a href="javascript:void(0)" id="achat7">Achetez un tickets pour cette ligne</a>
    <p>Porto-novo<img src="media/bus.png" style="margin-right: 12px;" width="100" alt="">Savalou</p>
    <p id="second6">
       Les bus de cette ligne démarrent à dix heure <span style="text-align:center; color:red; font-weight: 400;">10h</span>, nous vous conseillez d'être là trente minute avant le départ pour éviter tout retard et manque. Le trarif  s'éleve à
       <span style="text-align:center; color:red; font-weight: 400;">2500 Fcfa.</span>
    </p>
    <button type="button" id="plus6" onclick="butt()">Plus de détails</button> &nbsp;
    <button type="button" id="moins6">Voir moins</button>

<section id="overlay6">
  <div style="position:absolute; background:none; right: 20px; top: 5px; width:fit-content;box-shadow:none;">
        <button id="fermer7" type="button" title="Fermer">X</button>
      </div>
<form action="/lignes&tarifs" method="post">
 @csrf
   <h3>Formulaire d'achat</h3>
   <label for="nom">Nom</label><br>
   <input type="text" name="nom" class="input_nom7" id="nom" placeholder="AGOSSOU" required>
   <span style="color:red; text-align:center; display:none;" id="erreur_nom7">Nom trop long</span>
   <label for="prenom">prenom</label>
   <input type="text" name="prenom" class="input_prenom7" id="prenom" placeholder="Pascal" required>
   <label for="email">E-mail</label>
   <input type="text" name="email" id="email" placeholder="doe@gmail.com" required>
   <label for="text">Numéro whatsapp</label>
   <input type="number" name="numero" id="numero"  class="numero7" required>
   <span style="color:red; text-align:center; display:none;" id="erreur_numero7">Votre numéro de téléphone ne correspond pas</span>
   <label for="Nombre de tickets">Nombre de tickets</label>
   <input type="number"  id="nombre_ticket"  value="1" placeholder="1" required>
            <input type="hidden" value="Porto-novo" name="ville_de_depart" id="ville_de_depart" Required>    
            <input type="hidden" name="ville_arriver" id="ville_arriver" value="Savalou" Required>
            <label for="Date de voyage">Date de voyage</label>
            <input type="date" name="date" id="date">
             <label for="compagnie">Quel compagnie de Bus voulez-vous ?</label>
             <select name="compagnie" id="compagnie" Required>
                <option value="ATT" id="opt1">ATT</option>
                <option value="BAOBAB" id="opt2">BAOBAB</option>
                <option value="STM" id="opt3">STM</option>
             </select>
             <br>
 <script src="https://cdn.fedapay.com/checkout.js?v=1.1.7"
   data-public-key="pk_live_RmUfMDu0hRF2RobTxfcg-gE5"
   data-button-text="Payer"
   data-button-class="button-class"
   data-transaction-amount="2500"
   data-transaction-description="Achat de ticket  de bus allant de Porto-novo à Savalou"
   data-currency-iso="XOF">
 </script>
</form>
</section>
</div>

<div id="form_div">
    <a href="javascript:void(0)" id="achat8">Achetez un tickets pour cette ligne</a>
    <p>Porto-novo<img src="media/bus.png" style="margin-right: 12px;" width="100" alt="">Dassa</p>
    <p id="second7">
       Nos bus de cette ligne démarrent à dix heure <span style="text-align:center; color:red; font-weight: 400;">10h</span>, nous vous conseillez d'être là trente minute avant le départ pour éviter tout retard et manque. Le trarif  s'éleve à
       <span style="text-align:center; color:red; font-weight: 400;">3500 Fcfa.</span>
    </p>
    <button type="button" id="plus7" onclick="butt()">Plus de détails</button> &nbsp;
    <button type="button" id="moins7">Voir moins</button>

<section id="overlay7">
  <div style="position:absolute; background:none; right: 20px; top: 5px; width:fit-content;box-shadow:none;">
        <button id="fermer8" type="button" title="Fermer">X</button>
      </div>
<form action="/lignes&tarifs" method="post">
 @csrf
   <h3>Formulaire d'achat</h3>
   <label for="nom">Nom</label><br>
   <input type="text" name="nom" class="input_nom8" id="nom" placeholder="AGOSSOU" required>
   <span style="color:red; text-align:center; display:none;" id="erreur_nom8">Nom trop long</span>
   <label for="prenom">prenom</label>
   <input type="text" name="prenom" class="input_prenom8" id="prenom" placeholder="Pascal" required>
   <label for="email">E-mail</label>
   <input type="text" name="email" id="email" placeholder="doe@gmail.com" required>
   <label for="text">Numéro whatsapp</label>
   <input type="number" name="numero" id="numero"  class="numero8" required>
   <span style="color:red; text-align:center; display:none;" id="erreur_numero8">Votre numéro de téléphone ne correspond pas</span>
   <label for="Nombre de tickets">Nombre de tickets</label>
   <input type="number"  id="nombre_ticket"  value="1" placeholder="1" required>
            <input type="hidden" value="Porto-novo" name="ville_de_depart" id="ville_de_depart" Required>    
            <input type="hidden" name="ville_arriver" id="ville_arriver" value="Dassa" Required>
            <label for="Date de voyage">Date de voyage</label>
            <input type="date" name="date" id="date">
             <label for="compagnie">Quel compagnie de Bus voulez-vous ?</label>
             <select name="compagnie" id="compagnie" Required>
                <option value="ATT" id="opt1">ATT</option>
                <option value="BAOBAB" id="opt2">BAOBAB</option>
                <option value="STM" id="opt3">STM</option>
             </select>
             <br>
 <script src="https://cdn.fedapay.com/checkout.js?v=1.1.7"
   data-public-key="pk_live_RmUfMDu0hRF2RobTxfcg-gE5"
   data-button-text="Payer"
   data-button-class="button-class"
   data-transaction-amount="3500"
   data-transaction-description="Achat de ticket  de bus allant de  Porto-novo à Dassa"
   data-currency-iso="XOF">
 </script>
</form>
</section>
</div>

<div id="form_div">
    <a href="javascript:void(0)" id="achat9">Achetez un tickets pour cette ligne</a>
    <p>Porto-novo<img src="media/bus.png" style="margin-right: 12px;" width="100" alt="">Bassila</p>
    <p id="second8">
       Les bus de cette démarrent à  sept heure <span style="text-align:center; color:red; font-weight: 400;">7h</span>, nous vous conseillez d'être là trente minute avant le départ pour éviter tout retard et manque. Le trarif  s'éleve à
       <span style="text-align:center; color:red; font-weight: 400;">5000 Fcfa.</span>
    </p>
    <button type="button" id="plus8" onclick="butt()">Plus de détails</button> &nbsp;
    <button type="button" id="moins8">Voir moins</button>

<section id="overlay8">
  <div style="position:absolute; background:none; right: 20px; top: 5px; width:fit-content;box-shadow:none;">
        <button id="fermer9" type="button" title="Fermer">X</button>
      </div>
<form action="/lignes&tarifs" method="post">
 @csrf
   <h3>Formulaire d'achat</h3>
   <label for="nom">Nom</label><br>
   <input type="text" name="nom" class="input_nom9" id="nom" placeholder="AGOSSOU" required>
   <span style="color:red; text-align:center; display:none;" id="erreur_nom9">Nom trop long</span>
   <label for="prenom">prenom</label>
   <input type="text" name="prenom" class="input_prenom9" id="prenom" placeholder="Pascal" required>
   <label for="email">E-mail</label>
   <input type="text" name="email" id="email" placeholder="doe@gmail.com" required>
   <label for="text">Numéro whatsapp</label>
   <input type="number" name="numero" id="numero"  class="numero9" required>
   <span style="color:red; text-align:center; display:none;" id="erreur_numero9">Votre numéro de téléphone ne correspond pas</span>
   <label for="Nombre de tickets">Nombre de tickets</label>
   <input type="number"  id="nombre_ticket"  value="1" placeholder="1" required>
            <input type="hidden" value="Porto-novo" name="ville_de_depart" id="ville_de_depart" Required>    
            <input type="hidden" name="ville_arriver" id="ville_arriver" value="Bassila" Required>
            <label for="Date de voyage">Date de voyage</label>
            <input type="date" name="date" id="date">
             <label for="compagnie">Quel compagnie de Bus voulez-vous ?</label>
             <select name="compagnie" id="compagnie" Required>
                <option value="ATT" id="opt1">ATT</option>
                <option value="BAOBAB" id="opt2">BAOBAB</option>
                <option value="STM" id="opt3">STM</option>
             </select>
             <br>
 <script src="https://cdn.fedapay.com/checkout.js?v=1.1.7"
   data-public-key="pk_live_RmUfMDu0hRF2RobTxfcg-gE5"
   data-button-text="Payer"
   data-button-class="button-class"
   data-transaction-amount="5000"
   data-transaction-description="Achat de ticket  de bus allant de Porto-novo à Bassila"
   data-currency-iso="XOF">
 </script>
</form>
</section>
</div>

<div id="form_div">
    <a href="javascript:void(0)" id="achat10">Achetez un tickets pour cette ligne</a>
    <p>Bohicon<img src="media/bus.png" style="margin-right: 12px;" width="100" alt="">Savalou</p>
    <p id="second9">
       De bohicon pour savalour nos bus partent à dix heure trente <span style="text-align:center; color:red; font-weight: 400;">10h 30min</span>, nous vous conseillez d'être là trente minute avant le départ pour éviter tout retard et manque. Le trarif  s'éleve à
       <span style="text-align:center; color:red; font-weight: 400;">2000 Fcfa.</span>
    </p>
    <button type="button" id="plus9" onclick="butt()">Plus de détails</button> &nbsp;
    <button type="button" id="moins9">Voir moins</button>

<section id="overlay9">
  <div style="position:absolute; background:none; right: 20px; top: 5px; width:fit-content;box-shadow:none;">
        <button id="fermer10" type="button" title="Fermer">X</button>
      </div>
<form action="/lignes&tarifs" method="post">
 @csrf
   <!-- <img src="media/bus.png" width="100" alt=""> -->
   <h3>Formulaire d'achat</h3>
   <label for="nom">Nom</label><br>
   <input type="text" name="nom" class="input_nom10" id="nom" placeholder="AGOSSOU" required>
   <span style="color:red; text-align:center; display:none;" id="erreur_nom10">Nom trop long</span>
   <label for="prenom">prenom</label>
   <input type="text" name="prenom" class="input_prenom10" id="prenom" placeholder="Pascal" required>
   <label for="email">E-mail</label>
   <input type="text" name="email" id="email" placeholder="doe@gmail.com" required>
   <label for="text">Numéro whatsapp</label>
   <input type="number" name="numero" id="numero"  class="numero10" required>
   <span style="color:red; text-align:center; display:none;" id="erreur_numero10">Votre numéro de téléphone ne correspond pas</span>
   <label for="Nombre de tickets">Nombre de tickets</label>
   <input type="number"  id="nombre_ticket"  value="1" placeholder="1" required>
            <input type="hidden" value="Bohicon" name="ville_de_depart" id="ville_de_depart" Required>    
            <input type="hidden" name="ville_arriver" id="ville_arriver" value="Savalou" Required>
            <label for="Date de voyage">Date de voyage</label>
            <input type="date" name="date" id="date">
             <label for="compagnie">Quel compagnie de Bus voulez-vous ?</label>
             <select name="compagnie" id="compagnie" Required>
                <option value="ATT" id="opt1">ATT</option>
                <option value="BAOBAB" id="opt2">BAOBAB</option>
                <option value="STM" id="opt3">STM</option>
             </select>
             <br>
 <script src="https://cdn.fedapay.com/checkout.js?v=1.1.7"
   data-public-key="pk_live_RmUfMDu0hRF2RobTxfcg-gE5"
   data-button-text="Payer"
   data-button-class="button-class"
   data-transaction-amount="2000"
   data-transaction-description="Achat de ticket  de bus allant de Bohicon à Savalou"
   data-currency-iso="XOF">
 </script>
</form>
</section>
</div>

<div id="form_div">
    <a href="javascript:void(0)" id="achat11">Achetez un tickets pour cette ligne</a>
    <p>Bohicon<img src="media/bus.png" width="100" alt="">Dassa</p>
    <p id="second10">
       Les bus allant à dassa provenant de bohicon démarrent à  six heure trente minute <span style="text-align:center; color:red; font-weight: 400;">6h 30min</span>, nous vous conseillez d'être là trente minute avant le départ pour éviter tout retard et manque. Le trarif  s'éleve à
       <span style="text-align:center; color:red; font-weight: 400;">2500 Fcfa.</span>
    </p>
    <button type="button" id="plus10" onclick="butt()">Plus de détails</button> &nbsp;
    <button type="button" id="moins10">Voir moins</button>
    <section id="overlay10">
      <div style="position:absolute; background:none; right: 20px; top: 5px; width:fit-content;box-shadow:none;">
        <button id="fermer11" type="button" title="Fermer">X</button>
      </div>
<form action="/lignes&tarifs" method="post">
 @csrf
   <h3>Formulaire d'achat</h3>
   <label for="nom">Nom</label><br>
   <input type="text" name="nom" class="input_nom11" id="nom" placeholder="AGOSSOU" required>
   <span style="color:red; text-align:center; display:none;" id="erreur_nom11">Nom trop long</span>
   <label for="prenom">prenom</label>
   <input type="text" name="prenom" class="input_prenom11" id="prenom" placeholder="Pascal" required>
   <label for="email">E-mail</label>
   <input type="text" name="email" id="email" placeholder="doe@gmail.com" required>
   <label for="text">Numéro whatsapp</label>
   <input type="number" name="numero" id="numero"  class="numero11" required>
   <span style="color:red; text-align:center; display:none;" id="erreur_numero11">Votre numéro de téléphone ne correspond pas</span>
   <label for="Nombre de tickets">Nombre de tickets</label>
   <input type="number"  id="nombre_ticket"  value="1" placeholder="1" required>
            <input type="hidden" value="Bohicon" name="ville_de_depart" id="ville_de_depart" Required>    
            <input type="hidden" name="ville_arriver" id="ville_arriver" value="Dassa" Required>
            <label for="Date de voyage">Date de voyage</label>
            <input type="date" name="date" id="date">
             <label for="compagnie">Quel compagnie de Bus voulez-vous ?</label>
             <select name="compagnie" id="compagnie" Required>
                <option value="ATT" id="opt1">ATT</option>
                <option value="BAOBAB" id="opt2">BAOBAB</option>
                <option value="STM" id="opt3">STM</option>
             </select>
             <br>
 <script src="https://cdn.fedapay.com/checkout.js?v=1.1.7"
   data-public-key="pk_live_RmUfMDu0hRF2RobTxfcg-gE5"
   data-button-text="Payer"
   data-button-class="button-class"
   data-transaction-amount="2500"
   data-transaction-description="Achat de ticket  de bus allant de Bohicon à Dassa"
   data-currency-iso="XOF">
 </script>
</form>
</section>
</div>

<div id="form_div">
    <a href="javascript:void(0)" id="achat12">Achetez un tickets pour cette ligne</a>
    <p>Bohicon<img src="media/bus.png" width="100" alt="">Bassila</p>
    <p id="second11">
       Les bus bohicon allant à bassila démarrent à  six heure trente minute <span style="text-align:center; color:red; font-weight: 400;">6h 30min</span>, nous vous conseillez d'être là trente minute avant le départ pour éviter tout retard et manque. Le trarif  s'éleve à
       <span style="text-align:center; color:red; font-weight: 400;">3500 Fcfa.</span>
    </p>
    <button type="button" id="plus11" onclick="butt()">Plus de détails</button> &nbsp;
    <button type="button" id="moins11">Voir moins</button>
    <section id="overlay11">
      <div style="position:absolute; background:none; right: 20px; top: 5px; width:fit-content;box-shadow:none;">
        <button id="fermer12" type="button" title="Fermer">X</button>
      </div>
<form action="/lignes&tarifs" method="post">
 @csrf
   <h3>Formulaire d'achat</h3>
   <label for="nom">Nom</label><br>
   <input type="text" name="nom" class="input_nom12" id="nom" placeholder="AGOSSOU" required>
   <span style="color:red; text-align:center; display:none;" id="erreur_nom12">Nom trop long</span>
   <label for="prenom">prenom</label>
   <input type="text" name="prenom" class="input_prenom12" id="prenom" placeholder="Pascal" required>
   <label for="email">E-mail</label>
   <input type="text" name="email" id="email" placeholder="doe@gmail.com" required>
   <label for="text">Numéro whatsapp</label>
   <input type="number" name="numero" id="numero"  class="numero12" required>
   <span style="color:red; text-align:center; display:none;" id="erreur_numero12">Votre numéro de téléphone ne correspond pas</span>
   <label for="Nombre de tickets">Nombre de tickets</label>
   <input type="number"  id="nombre_ticket"  value="1" placeholder="1" required>
            <input type="hidden" value="Bohicon" name="ville_de_depart" id="ville_de_depart" Required>    
            <input type="hidden" name="ville_arriver" id="ville_arriver" value="Bassila" Required>
            <label for="Date de voyage">Date de voyage</label>
            <input type="date" name="date" id="date">
             <label for="compagnie">Quel compagnie de Bus voulez-vous ?</label>
             <select name="compagnie" id="compagnie" Required>
                <option value="ATT" id="opt1">ATT</option>
                <option value="BAOBAB" id="opt2">BAOBAB</option>
                <option value="STM" id="opt3">STM</option>
             </select>
             <br>
 <script src="https://cdn.fedapay.com/checkout.js?v=1.1.7"
   data-public-key="pk_live_RmUfMDu0hRF2RobTxfcg-gE5"
   data-button-text="Payer"
   data-button-class="button-class"
   data-transaction-amount="3500"
   data-transaction-description="Achat de ticket  de bus allant de Bohicon à Dassa"
   data-currency-iso="XOF">
 </script>
</form>
</section>
</div>

<div id="form_div">
    <a href="javascript:void(0)" id="achat13">Achetez un tickets pour cette ligne</a>
    <p>Savalou<img src="media/bus.png" style="margin-right: 5px;" width="100" alt="">Dassa</p>
    <p id="second12">
       Nos bus savalou à Dassa démarrent à  huit heure<span style="text-align:center; color:red; font-weight: 400;">8h</span>, nous vous conseillez d'être là trente minute avant le départ pour éviter tout retard et manque. Le trarif  s'éleve à
       <span style="text-align:center; color:red; font-weight: 400;">2000 Fcfa.</span>
    </p>
    <button type="button" id="plus12" onclick="butt()">Plus de détails</button> &nbsp;
    <button type="button" id="moins12">Voir moins</button>
    <section id="overlay12">
      <div style="position:absolute; background:none; right: 20px; top: 5px; width:fit-content;box-shadow:none;">
        <button id="fermer13" type="button" title="Fermer">X</button>
      </div>
<form action="/lignes&tarifs" method="post">
 @csrf
   <h3>Formulaire d'achat</h3>
   <label for="nom">Nom</label><br>
   <input type="text" name="nom" class="input_nom13" id="nom" placeholder="AGOSSOU" required>
   <span style="color:red; text-align:center; display:none;" id="erreur_nom13">Nom trop long</span>
   <label for="prenom">prenom</label>
   <input type="text" name="prenom" class="input_prenom13" id="prenom" placeholder="Pascal" required>
   <label for="email">E-mail</label>
   <input type="text" name="email" id="email" placeholder="doe@gmail.com" required>
   <label for="text">Numéro whatsapp</label>
   <input type="number" name="numero" id="numero"  class="numero13" required>
   <span style="color:red; text-align:center; display:none;" id="erreur_numero13">Votre numéro de téléphone ne correspond pas</span>
   <label for="Nombre de tickets">Nombre de tickets</label>
   <input type="number"  id="nombre_ticket"  value="1" placeholder="1" required>
            <input type="hidden" value="Savalou" name="ville_de_depart" id="ville_de_depart" Required>    
            <input type="hidden" name="ville_arriver" id="ville_arriver" value="Dassa" Required>
            <label for="Date de voyage">Date de voyage</label>
            <input type="date" name="date" id="date">
             <label for="compagnie">Quel compagnie de Bus voulez-vous ?</label>
             <select name="compagnie" id="compagnie" Required>
                <option value="ATT" id="opt1">ATT</option>
                <option value="BAOBAB" id="opt2">BAOBAB</option>
                <option value="STM" id="opt3">STM</option>
             </select>
             <br>
 <script src="https://cdn.fedapay.com/checkout.js?v=1.1.7"
   data-public-key="pk_live_RmUfMDu0hRF2RobTxfcg-gE5"
   data-button-text="Payer"
   data-button-class="button-class"
   data-transaction-amount="2000"
   data-transaction-description="Achat de ticket  de bus allant de Savalou à Dassa"
   data-currency-iso="XOF">
 </script>
</form>
</section>
</div>

<div id="form_div">
    <a href="javascript:void(0)" id="achat14">Achetez un tickets pour cette ligne</a>
    <p>Savalou<img src="media/bus.png" width="100" alt="">Bassila</p>
    <p id="second13">
       Démarrage à  sept heure <span style="text-align:center; color:red; font-weight: 400;">7h</span>, nous vous conseillez d'être là trente minute avant le départ pour éviter tout retard et manque. Le trarif  s'éleve à
       <span style="text-align:center; color:red; font-weight: 400;">3500 Fcfa.</span>
    </p>
    <button type="button" id="plus13" onclick="butt()">Plus de détails</button> &nbsp;
    <button type="button" id="moins13">Voir moins</button>
    <section id="overlay13">
      <div style="position:absolute; background:none; right: 20px; top: 5px; width:fit-content;box-shadow:none;">
        <button id="fermer14" type="button" title="Fermer">X</button>
      </div>
<form action="/lignes&tarifs" method="post">
 @csrf
   <h3>Formulaire d'achat</h3>
   <label for="nom">Nom</label><br>
   <input type="text" name="nom" class="input_nom14" id="nom" placeholder="AGOSSOU" required>
   <span style="color:red; text-align:center; display:none;" id="erreur_nom14">Nom trop long</span>
   <label for="prenom">prenom</label>
   <input type="text" name="prenom" class="input_prenom14" id="prenom" placeholder="Pascal" required>
   <label for="email">E-mail</label>
   <input type="text" name="email" id="email" placeholder="doe@gmail.com" required>
   <label for="text">Numéro whatsapp</label>
   <input type="number" name="numero" id="numero"  class="numero14" required>
   <span style="color:red; text-align:center; display:none;" id="erreur_numero14">Votre numéro de téléphone ne correspond pas</span>
   <label for="Nombre de tickets">Nombre de tickets</label>
   <input type="number"  id="nombre_ticket"  value="1" placeholder="1" required>
            <input type="hidden" value="Savalou" name="ville_de_depart" id="ville_de_depart" Required>    
            <input type="hidden" name="ville_arriver" id="ville_arriver" value="Bassila" Required>
            <label for="Date de voyage">Date de voyage</label>
            <input type="date" name="date" id="date">
             <label for="compagnie">Quel compagnie de Bus voulez-vous ?</label>
             <select name="compagnie" id="compagnie" Required>
                <option value="ATT" id="opt1">ATT</option>
                <option value="BAOBAB" id="opt2">BAOBAB</option>
                <option value="STM" id="opt3">STM</option>
             </select>
             <br>
 <script src="https://cdn.fedapay.com/checkout.js?v=1.1.7"
   data-public-key="pk_live_RmUfMDu0hRF2RobTxfcg-gE5"
   data-button-text="Payer"
   data-button-class="button-class"
   data-transaction-amount="3500"
   data-transaction-description="Achat de ticket  de bus allant de Savalou à Bassila"
   data-currency-iso="XOF">
 </script>
</form>
</section>
</div>

</section>
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
  <script src="lignes&tarifs.js"></script>
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