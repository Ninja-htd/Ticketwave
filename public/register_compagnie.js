// on va chercher tout les éléments de notre page
const page = document.querySelectorAll('.page');
const headd = document.getElementById('headd');
const NbrPage = page.length ;//nombre de pages du formulaire
let pageActive = 1 ;

 // on attend le chargement de la page
 window.onload = () => {
    // on affiche la première pa du formulaire
    document.querySelector('.page').style.display = "initial";
    // on affiche le numéros des pages dans l'êntete
    // on parcours la lites des pages
      page.forEach((page, index) => {
        // on crée un élément numero de page
        let element = document.createElement('div');
        element.classList.add("page-num");
        element.id ="num" + (index + 1)
        if(pageActive === index +1){
            element.classList.add("active");
        }
        element.innerHTML = index +1;
        headd.appendChild(element);

    })
    // on gere les boutons "suivant"
    let butons = document.querySelectorAll(".next");

   for(let buton of butons){
    buton.addEventListener("click", page_suivante);
   }
      // on gere les boutons "suivant"
   butons = document.querySelectorAll(".prev");

      for(let buton of butons){
       buton.addEventListener("click", page_prededante);
      }
 }

// cette fontion fait avancer la page d'un formulaire
 function page_suivante(){
   
    //  on masque tout les autres pages
    for(let pagee of page){
        pagee.style.display ="none";
    }
    // on affiche la page suivant
   this.parentElement.nextElementSibling.style.display="initial";
//    on désactive tous les numeros
 document.querySelector(".active").classList.remove("active");
 // on incrémente pageActive (passez à la page suivant)
 pageActive++

//  on active le nouveau numero
document.querySelector("#num"+pageActive).classList.add("active");

}

// cette fontion fait rculer la page d'un formulaire
function page_prededante(){
   
    //  on masque tout les autres pages
    for(let pagee of page){
        pagee.style.display ="none";
    }
    // on affiche la page suivant
   this.parentElement.previousElementSibling.style.display="initial";
//    on désactive tous les numeros
 document.querySelector(".active").classList.remove("active");
 // on incrémente pageActive (passez à la page suivant)
 pageActive-- 

//  on active le nouveau numero
document.querySelector("#num"+pageActive).classList.add("active");

};

let erreur1 = document.getElementById('erreur1');
let erreur2 = document.getElementById('erreur2');
let erreur3 = document.getElementById('erreur3');
let erreur4 = document.getElementById('erreur4');
let erreur5 = document.getElementById('erreur5');

let email = document.getElementById('email');
let nom = document.getElementById('nom');
let prenom = document.getElementById('prenom');

nom.addEventListener('input', function(){
  this.value = this.value.toUpperCase();
})
prenom.addEventListener('input', function(){
    this.value = this.value.toLowerCase();
})

 