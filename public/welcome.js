let user_img = document.getElementById('user_img');
let auth = document.getElementById('auth');
user_img.addEventListener('click', function(){
    document.getElementById('auth').style.display='block';
});

// for cotonou
 let prix1 = '1500 Fcfa' ; 
 let prix2 = '3000 Fcfa'; 
 let prix3 ='3500 Fcfa'; 
 let prix4 = '4000 Fcfa'; 
 let prix5 = '5000 Fcfa'; 

// for porto-novo
let prix6 = '2000 Fcfa'; 
let prix7 = '2500 Fcfa'; 
let prix8 = '3500 Fcfa'; 
let prix9 = '6000 Fcfa'; 

// for Bohicon
let prix10 = '1500 Fcfa'; 
let prix11 = '2500 Fcfa'; 
let prix12 = '3500 Fcfa'; 

// for Savalou
let prix13 = '2000 Fcfa'; 
let prix14 = '3500 Fcfa';
 
// for Dassa
let prix15 = '1500 Fcfa'; 

function voir(){
let ville1 = document.getElementById('ville1').value;
let ville2 = document.getElementById('ville2').value;
let tarifs = document.getElementById('tarifs');
    
    //   Cotonou
       if(ville1 =="Cotonou", ville2 =="Porto-novo"){
        tarifs.innerHTML= prix1;
        tarifs.style.color="#0ceba1";
      }
      else if(ville1=="Cotonou", ville2 =="Bohicon"){
        tarifs.innerHTML= prix2;
        tarifs.style.color="#0ceba1";
      }
      else if(ville1=="Cotonou", ville2 =="Savalou"){
        tarifs.innerHTML= prix3;
        tarifs.style.color="#0ceba1";
      }
      else if(ville1=="Cotonou", ville2 =="Dassa"){
        tarifs.innerHTML= prix4;
        tarifs.style.color="#0ceba1";
      }
      else if(ville1=="Cotonou", ville2 =="Bassila"){
        tarifs.innerHTML= prix5;
        tarifs.style.color="#0ceba1";
      }

    //  Porto-novo
       else if(ville1 =="Porto-novo", ville2 =="Cotonou"){
        tarifs.innerHTML= prix1;
        tarifs.style.color="#0ceba1";
      }  
       else if(ville1=="Porto-novo", ville2 =="Bohicon"){
        tarifs.innerHTML= prix6;
        tarifs.style.color="#0ceba1";
      }
      else if(ville1=="Porto-novo", ville2 =="Savalou"){
        tarifs.innerHTML= prix7;
        tarifs.style.color="#0ceba1";
      }
      else if(ville1=="Porto-novo", ville2 =="Dassa"){
        tarifs.innerHTML= prix8;
        tarifs.style.color="#0ceba1";
      }
      else if(ville1=="Porto-novo", ville2 =="Bassila"){
        tarifs.innerHTML= prix9;
        tarifs.style.color="#0ceba1";
      }

    //   Bohicon

       else if(ville1=="Bohicon", ville2 =="Porto-novo"){
        tarifs.innerHTML= prix6;
        tarifs.style.color="#0ceba1";
      }
      else if(ville1=="Bohicon", ville2 =="Savalou"){
        tarifs.innerHTML= prix10;
        tarifs.style.color="#0ceba1";
      }
      else if(ville1=="Bohicon", ville2 =="Dassa"){
        tarifs.innerHTML= prix11;
        tarifs.style.color="#0ceba1";
      }
      else if(ville1=="Bohicon", ville2 =="Bassila"){
        tarifs.innerHTML= prix12;
        tarifs.style.color="#0ceba1";
      }

    //   Savalou

       else if(ville1=="Savalou", ville2 =="Dassa"){
        tarifs.innerHTML= prix13;
        tarifs.style.color="#0ceba1";
      }
      else if(ville1=="Savalou", ville2 =="Bassila"){
        tarifs.innerHTML= prix14;
        tarifs.style.color="#0ceba1";
      }

    //   Dassa
      else if(ville1=="Dassa", ville2 =="Bassila"){
        tarifs.innerHTML= prix15;
        tarifs.style.color="#0ceba1";
      }

    //    Bassila 

       else if(ville1=="Bassila", ville2 =="Cotonou"){
        tarifs.innerHTML= prix5;
        tarifs.style.color="#0ceba1";
      }else if(ville1=="Bassila", ville2 =="Porto-novo"){
        tarifs.innerHTML= prix9;
        tarifs.style.color="#0ceba1";
      }else if(ville1=="Bassila", ville2 =="Bohicon"){
        tarifs.innerHTML= prix12;
        tarifs.style.color="#0ceba1";
      }else if(ville1=="Bassila", ville2 =="Savalou"){
        tarifs.innerHTML= prix14;
        tarifs.style.color="#0ceba1";
      }else if(ville1=="Bassila", ville2 =="Dassa"){
        tarifs.innerHTML= prix15;
        tarifs.style.color="#0ceba1";
      }
    //   Hybride
      else if(ville1=="Cotonou", ville2 =="Cotonou"){
        tarifs.innerHTML="Veuillez choisis une ligne correct !";
        tarifs.style.color="#e72b2b";
      }
      
      else if(ville1=="Porto-novo", ville2 =="Porto-novo"){
        tarifs.innerHTML="Veuillez choisis une ligne correct !";
        tarifs.style.color="#e72b2b";
      }
      else if(ville1=="Bohicon", ville2 =="Bohicon"){
        tarifs.innerHTML="Veuillez choisis une ligne correct !";
        tarifs.style.color="#e72b2b";
      }
      else if(ville1=="Salavou", ville2 =="Savalou"){
        tarifs.innerHTML="Veuillez choisis une ligne correct !";
        tarifs.style.color="#e72b2b";
      }
      else if(ville1=="Dassa", ville2 =="Dassa"){
        tarifs.innerHTML="Veuillez choisis une ligne correct !";
        tarifs.style.color="#e72b2b";
      }
      else if(ville1=="Bassila", ville2 =="Bassila"){
        tarifs.innerHTML="Veuillez choisis une ligne correct !";
        tarifs.style.color="#e72b2b";
      }
      else{
         tarifs.innerHTML="Veuillez choisis une ligne correct !";
         tarifs.style.color="#e72b2b";
      };
  };
  const imgg = document.querySelector('.imgg');
  function fermer(){
    imgg.style.display="none";
  }
window.addEventListener('load', ()=>{
  imgg.style.display="block";
  imgg.classList.add('imgg');
});

// ville1= "Cotonou";
//   switch (ville1) {
//   case 'Cotonou':
//   alert( 'Too small' );
//   break;
//   case 'Porto-novo':
//   alert( 'Exactly!' );
//   break;
//   case 'Bohicon':
//   alert( 'Too big' );
//   break;
//   default:
//   alert( "I don't know such values" );
//   }
  
    