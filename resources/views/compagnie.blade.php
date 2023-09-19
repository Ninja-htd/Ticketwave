<!doctype html>
<html lang="fr">

<head>
  <title>Cmpagnie</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="regist_compagnie.css">
  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
  <header>
    <h3 Style="text-align:center; font-size: 18px;">INSCRIVEZ VOTRE COMPAGNIE MAINTENANT</h3>
  </header>
  <main>
@if(session()->has('Succes'))
      <div class="alert alert-success" style="text-align:center;" id="sauvegarde"> {{ session('Succes')}} </div>
@endif
    <div class="division">
    <form action="/compagnie" method="post">
      @csrf
      <h3 id="headd"></h3>      
        <div class="page" id="page1">
        <h4> Infromation Personnel</h4>
        <div class="" id="erreur4" style="color: red;text-align:center;font-weight: 300; display: none;">Nom trop long !</div>
        <div class="" id="erreur5" style="color: red;text-align:center;font-weight: 300; display: none;">Prenom trop long !</div>
        <div>
             <label for="nom">Nom du Fondateur <span title="Obligatoire" style="color:red; cursor:pointer; ">*</span></label>
             <input type="text" name="nom" id="nom" Required>
            </div>
            <div>
             <label for="prenom">Prenom du Fondateur <span title="Obligatoire" style="color:red; cursor:pointer; ">*</span></label>
             <input type="text" name="prenom" id="prenom" Required>
            </div>
            <div>
             <label for="email">E-mail du Fondateur <span title="Obligatoire" style="color:red; cursor:pointer; ">*</span></label>
             <input type="text" name="email" id="email" Required>
            </div>
            &nbsp;
            <button type="button" class="next" style="margin-top:-10px;">Suivant</button>
        </div>
        <div class="page" id="page2">
        <h4> Information sur la compagnie</h4>
        <div class="" id="erreur3" style="color: red;text-align:center; padding-left: 3px;font-weight: 300; display: none;">Votre numéro whatsapp n'est pas correct !</div>
            <div>
             <label for="compagnie">Nom de la compagnie <span title="Obligatoire" style="color:red; cursor:pointer; ">*</span></label>
             <input type="text" name="compagnie" id="compangie" Required>
            </div>
            <div>
             <label for="adresse">Adresse de la compagnie <span title="Obligatoire" style="color:red; cursor:pointer; ">*</span></label>
              <input type="text" id="addresse" name="addresse" Required>
            </div>
            <br>
            <div>
             <label for="">Numéro d'enregistremet de la compagnie <span title="Obligatoire" style="color:red; cursor:pointer; ">*</span></label>
             <input type="text" name="enregistrement" id="enregistrement" placeholder="Ex: Bp56efvdnndv-b,kd4d" required>
            </div>
            <button type="button" class="prev">Précédant</button>
            &nbsp;
            <button type="button" class="next">Suivant</button>
        </div>
        <div class="page" id="page3">
        <div id="erreur1" class="" style="color:red;text-align:center; font-weight: 300; display: none;">Nous n'avons plus de place disponible veuillez nous contacter en urgence !</div>
        <h4> Information supplémentaire</h4>
           <div id="erreur2" class="" style="color: red; padding-left: 3px; font-weight: 300; display: none;">Veuillez saissie un nombre de ticket  s'il vous plait !</div>
           <div>
             <label for="solo">Nombres de tickets à acheter &nbsp;<span>(Optionnel)</span></label>
             <input type="number" name="solo" id="solo" >
            </div>
            <div>
             <label for="date_heure">Á quel date et heure souhaitez-vous voyager ? &nbsp;<span>(Optionnel)</span></label>
             <input type="date" name="bien" id="date_heure" >
            </div>
           <div>
             <label for="compagnie">Quel compagnie de Bus voulez-vous ? &nbsp;<span>(Optionnel)</span></label>
             <select name="nana" id="compagnie" >
                <option value="ATT" id="opt1">ATT</option>
                <option value="BAOBAB" id="opt2">BAOBAB</option>
                <option value="STM" id="opt3">STM</option>
             </select>
            </div>
            <button type="button" class="prev">Précédant</button>
            &nbsp;
            <button type="submit" id="envoyez" onclick="envoyez()" class="next">Envoyez</button>
        </div>
     </form>
    </div>
  </main>

  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
  <script src="register_compagnie.js"></script>
</body>

</html>