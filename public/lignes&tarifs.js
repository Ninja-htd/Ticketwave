let user_img = document.getElementById('user_img');
let auth = document.getElementById('auth');
// let nombre_ticket = document.getElementById('nombre_ticket').value;
var inputNombreTickets = document.getElementById('nombre_ticket');

inputNombreTickets.addEventListener('change', function() {
var fedapayScript = document.querySelector('script[src="https://cdn.fedapay.com/checkout.js?v=1.1.7"]');
var nombreTickets = parseInt(inputNombreTickets.value);
var transactionAmount = parseFloat(fedapayScript.dataset.transactionAmount);
var nouveauMontant = nombreTickets * transactionAmount;
fedapayScript.dataset.transactionAmount = nouveauMontant.toString();
});



user_img.addEventListener('click', function(){
    document.getElementById('auth').style.display='block';
});
let secondee = document.getElementById('second');
let plus = document.getElementById('plus');
let moins = document.getElementById('moins');
let plus1 = document.getElementById('plus1');
let plus2 = document.getElementById('plus2');
let plus3 = document.getElementById('plus3');
let plus4 = document.getElementById('plus4');
let plus5 = document.getElementById('plus5');
let plus6 = document.getElementById('plus6');
let plus7 = document.getElementById('plus7');
let plus8 = document.getElementById('plus8');
let plus9 = document.getElementById('plus9');
let plus10 = document.getElementById('plus10');
let plus11 = document.getElementById('plus11');
let plus12 = document.getElementById('plus12');
let plus13 = document.getElementById('plus13');

let moins1 = document.getElementById('moins1');
let moins2 = document.getElementById('moins2');
let moins3 = document.getElementById('moins3');
let moins4 = document.getElementById('moins4');
let moins5 = document.getElementById('moins5');
let moins6 = document.getElementById('moins6');
let moins7 = document.getElementById('moins7');
let moins8 = document.getElementById('moins8');
let moins9 = document.getElementById('moins9');
let moins10 = document.getElementById('moins10');
let moins11 = document.getElementById('moins11');
let moins12 = document.getElementById('moins12');
let moins13 = document.getElementById('moins13');

let secondee1 = document.getElementById('second1');
let secondee2 = document.getElementById('second2');
let secondee3 = document.getElementById('second3');
let secondee4 = document.getElementById('second4');
let secondee5 = document.getElementById('second5');
let secondee6 = document.getElementById('second6');
let secondee7 = document.getElementById('second7');
let secondee8 = document.getElementById('second8');
let secondee9 = document.getElementById('second9');
let secondee10 = document.getElementById('second10');
let secondee11= document.getElementById('second11');
let secondee12 = document.getElementById('second12');
let secondee13 = document.getElementById('second13');



plus.addEventListener('click', function(){
    document.getElementById("second").style.display ="block";
    document.getElementById("plus").style.display="none";
    document.getElementById("moins").style.display="block";
})
// vois moins
moins.addEventListener('click', function(){
    document.getElementById("second").style.display ="none";
    document.getElementById("moins").style.display="none";
    document.getElementById("plus").style.display="block";
})


plus1.addEventListener('click', function(){
    document.getElementById("second1").style.display ="block";
    document.getElementById("plus1").style.display="none";
    document.getElementById("moins1").style.display="block";
})
// vois moins
moins1.addEventListener('click', function(){
    document.getElementById("second1").style.display ="none";
    document.getElementById("moins1").style.display="none";
    document.getElementById("plus1").style.display="block";
})


plus2.addEventListener('click', function(){
    document.getElementById("second2").style.display ="block";
    document.getElementById("plus2").style.display="none";
    document.getElementById("moins2").style.display="block";
})
// vois moins
moins2.addEventListener('click', function(){
    document.getElementById("second2").style.display ="none";
    document.getElementById("moins2").style.display="none";
    document.getElementById("plus2").style.display="block";
})


plus3.addEventListener('click', function(){
    document.getElementById("second3").style.display ="block";
    document.getElementById("plus3").style.display="none";
    document.getElementById("moins3").style.display="block";
})
// vois moins
moins3.addEventListener('click', function(){
    document.getElementById("second3").style.display ="none";
    document.getElementById("moins3").style.display="none";
    document.getElementById("plus3").style.display="block";
})

plus4.addEventListener('click', function(){
    document.getElementById("second4").style.display ="block";
    document.getElementById("plus4").style.display="none";
    document.getElementById("moins4").style.display="block";
})
// vois moins
moins4.addEventListener('click', function(){
    document.getElementById("second4").style.display ="none";
    document.getElementById("moins4").style.display="none";
    document.getElementById("plus4").style.display="block";
})

plus5.addEventListener('click', function(){
    document.getElementById("second5").style.display ="block";
    document.getElementById("plus5").style.display="none";
    document.getElementById("moins5").style.display="block";
})
// vois moins
moins5.addEventListener('click', function(){
    document.getElementById("second5").style.display ="none";
    document.getElementById("moins5").style.display="none";
    document.getElementById("plus5").style.display="block";
})

plus6.addEventListener('click', function(){
    document.getElementById("second6").style.display ="block";
    document.getElementById("plus6").style.display="none";
    document.getElementById("moins6").style.display="block";
})
// vois moins
moins6.addEventListener('click', function(){
    document.getElementById("second6").style.display ="none";
    document.getElementById("moins6").style.display="none";
    document.getElementById("plus6").style.display="block";
})

plus7.addEventListener('click', function(){
    document.getElementById("second7").style.display ="block";
    document.getElementById("plus7").style.display="none";
    document.getElementById("moins7").style.display="block";
})
// vois moins
moins7.addEventListener('click', function(){
    document.getElementById("second7").style.display ="none";
    document.getElementById("moins7").style.display="none";
    document.getElementById("plus7").style.display="block";
})


plus8.addEventListener('click', function(){
    document.getElementById("second8").style.display ="block";
    document.getElementById("plus8").style.display="none";
    document.getElementById("moins8").style.display="block";
})
// vois moins
moins8.addEventListener('click', function(){
    document.getElementById("second8").style.display ="none";
    document.getElementById("moins8").style.display="none";
    document.getElementById("plus8").style.display="block";
})


plus9.addEventListener('click', function(){
    document.getElementById("second9").style.display ="block";
    document.getElementById("plus9").style.display="none";
    document.getElementById("moins9").style.display="block";
})
// vois moins
moins9.addEventListener('click', function(){
    document.getElementById("second9").style.display ="none";
    document.getElementById("moins9").style.display="none";
    document.getElementById("plus9").style.display="block";
})


plus10.addEventListener('click', function(){
    document.getElementById("second10").style.display ="block";
    document.getElementById("plus10").style.display="none";
    document.getElementById("moins10").style.display="block";
})
// vois moins
moins10.addEventListener('click', function(){
    document.getElementById("second10").style.display ="none";
    document.getElementById("moins10").style.display="none";
    document.getElementById("plus10").style.display="block";
})

plus11.addEventListener('click', function(){
    document.getElementById("second11").style.display ="block";
    document.getElementById("plus11").style.display="none";
    document.getElementById("moins11").style.display="block";
})
// vois moins
moins11.addEventListener('click', function(){
    document.getElementById("second11").style.display ="none";
    document.getElementById("moins11").style.display="none";
    document.getElementById("plus11").style.display="block";
})

plus12.addEventListener('click', function(){
    document.getElementById("second12").style.display ="block";
    document.getElementById("plus12").style.display="none";
    document.getElementById("moins12").style.display="block";
})
// vois moins
moins12.addEventListener('click', function(){
    document.getElementById("second12").style.display ="none";
    document.getElementById("moins12").style.display="none";
    document.getElementById("plus12").style.display="block";
})


plus13.addEventListener('click', function(){
    document.getElementById("second13").style.display ="block";
    document.getElementById("plus13").style.display="none";
    document.getElementById("moins13").style.display="block";
})
// vois moins
moins13.addEventListener('click', function(){
    document.getElementById("second13").style.display ="none";
    document.getElementById("moins13").style.display="none";
    document.getElementById("plus13").style.display="block";
});


  let button_class = document.querySelector('.button-class');
  let input_nom1 = document.querySelector('.input_nom1');
  let input_nom2 = document.querySelector('.input_nom2');
  let input_nom3 = document.querySelector('.input_nom3');
  let input_nom4 = document.querySelector('.input_nom4');
  let input_nom5 = document.querySelector('.input_nom5');
  let input_nom6 = document.querySelector('.input_nom6');
  let input_nom7 = document.querySelector('.input_nom7');
  let input_nom8 = document.querySelector('.input_nom8');
  let input_nom9 = document.querySelector('.input_nom9');
  let input_nom10 = document.querySelector('.input_nom10');
  let input_nom11 = document.querySelector('.input_nom11');
  let input_nom12 = document.querySelector('.input_nom12');
  let input_nom13 = document.querySelector('.input_nom13');
  let input_nom14 = document.querySelector('.input_nom14');


  let erreur_nom1 = document.getElementById('erreur_nom1');
  let erreur_nom2 = document.getElementById('erreur_nom2');
  let erreur_nom3 = document.getElementById('erreur_nom3');
  let erreur_nom4 = document.getElementById('erreur_nom4');
  let erreur_nom5 = document.getElementById('erreur_nom5');
  let erreur_nom6 = document.getElementById('erreur_nom6');
  let erreur_nom7 = document.getElementById('erreur_nom7');
  let erreur_nom8 = document.getElementById('erreur_nom8');
  let erreur_nom9 = document.getElementById('erreur_nom9');
  let erreur_nom10 = document.getElementById('erreur_nom10');
  let erreur_nom11 = document.getElementById('erreur_nom11');
  let erreur_nom12 = document.getElementById('erreur_nom12');
  let erreur_nom13 = document.getElementById('erreur_nom13');
  let erreur_nom14 = document.getElementById('erreur_nom14');

  let input_prenom1 = document.querySelector('.input_prenom1');
  let input_prenom2 = document.querySelector('.input_prenom2');
  let input_prenom3 = document.querySelector('.input_prenom3');
  let input_prenom4 = document.querySelector('.input_prenom4');
  let input_prenom5 = document.querySelector('.input_prenom5');
  let input_prenom6 = document.querySelector('.input_prenom6');
  let input_prenom7 = document.querySelector('.input_prenom7');
  let input_prenom8 = document.querySelector('.input_prenom8');
  let input_prenom9 = document.querySelector('.input_prenom9');
  let input_prenom10 = document.querySelector('.input_prenom10');
  let input_prenom11 = document.querySelector('.input_prenom11');
  let input_prenom12 = document.querySelector('.input_prenom12');
  let input_prenom13 = document.querySelector('.input_prenom13');
  let input_prenom14 = document.querySelector('.input_prenom14');

  let email = document.getElementById('email');

// Appel input numero
  let numero = document.getElementById('numero');
  let numero2 = document.querySelector('.numero2');
  let numero3 = document.querySelector('.numero3');
  let numero4 = document.querySelector('.numero4');
  let numero5 = document.querySelector('.numero5');
  let numero6 = document.querySelector('.numero6');
  let numero7 = document.querySelector('.numero7');
  let numero8 = document.querySelector('.numero8');
  let numero9 = document.querySelector('.numero9');
  let numero10 = document.querySelector('.numero10');
  let numero11 = document.querySelector('.numero11');
  let numero12 = document.querySelector('.numero12');
  let numero13 = document.querySelector('.numero13');
  let numero14 = document.querySelector('.numero14');
// Appel span erreur pour numero
  let erreur_numero = document.getElementById('erreur_numero1');
  let erreur_numero2 = document.getElementById('erreur_numero2');
  let erreur_numero3 = document.getElementById('erreur_numero3');
  let erreur_numero4 = document.getElementById('erreur_numero4');
  let erreur_numero5 = document.getElementById('erreur_numero5');
  let erreur_numero6 = document.getElementById('erreur_numero6');
  let erreur_numero7 = document.getElementById('erreur_numero7');
  let erreur_numero8 = document.getElementById('erreur_numero8');
  let erreur_numero9 = document.getElementById('erreur_numero9');
  let erreur_numero10 = document.getElementById('erreur_numero10');
  let erreur_numero11 = document.getElementById('erreur_numero11');
  let erreur_numero12 = document.getElementById('erreur_numero12');
  let erreur_numero13 = document.getElementById('erreur_numero13');
  let erreur_numero14 = document.getElementById('erreur_numero14');

  let ville_de_depart = document.getElementById('ville_de_depart');
  let ville_arriver = document.getElementById('ville_arriver');
  let date = document.getElementById('date');
  let fermer1 = document.getElementById('fermer1');
  let fermer2 = document.getElementById('fermer2');
  let fermer3 = document.getElementById('fermer3');
  let fermer4 = document.getElementById('fermer4');
  let fermer5 = document.getElementById('fermer5');
  let fermer6 = document.getElementById('fermer6');
  let fermer7 = document.getElementById('fermer7');
  let fermer8 = document.getElementById('fermer8');
  let fermer9 = document.getElementById('fermer9');
  let fermer10 = document.getElementById('fermer10');
  let fermer11 = document.getElementById('fermer11');
  let fermer12 = document.getElementById('fermer12');
  let fermer13 = document.getElementById('fermer13');
  let fermer14 = document.getElementById('fermer14');

  let overlay =document.getElementById('overlay');
  let overlay1 =document.getElementById('overlay1');
  let overlay2 =document.getElementById('overlay2');
  let overlay3 =document.getElementById('overlay3');
  let overlay4 =document.getElementById('overlay4');
  let overlay5 =document.getElementById('overlay5');
  let overlay6 =document.getElementById('overlay6');
  let overlay7 =document.getElementById('overlay7');
  let overlay8 =document.getElementById('overlay8');
  let overlay9 =document.getElementById('overlay9');
  let overlay10 =document.getElementById('overlay10');
  let overlay11 =document.getElementById('overlay11');
  let overlay12 =document.getElementById('overlay12');
  let overlay13 =document.getElementById('overlay13');
  let achat1 =document.getElementById('achat1');
  let achat2 =document.getElementById('achat2');
  let achat3 =document.getElementById('achat3');
  let achat4 =document.getElementById('achat4');
  let achat5 =document.getElementById('achat5');
  let achat6 =document.getElementById('achat6');
  let achat7 =document.getElementById('achat7');
  let achat8 =document.getElementById('achat8');
  let achat9 =document.getElementById('achat9');
  let achat10 =document.getElementById('achat10');
  let achat11 =document.getElementById('achat11');
  let achat12 =document.getElementById('achat12');
  let achat13 =document.getElementById('achat13');
  let achat14 =document.getElementById('achat14');
  fermer1.addEventListener('click', function(){
    overlay.style.display="none";
  })

  fermer2.addEventListener('click', function(){
    overlay1.style.display="none";
  })
  
  fermer3.addEventListener('click', function(){
    overlay2.style.display="none";
  })
  fermer4.addEventListener('click', function(){
    overlay3.style.display="none";
  })
  fermer5.addEventListener('click', function(){
    overlay4.style.display="none";
  })
  fermer6.addEventListener('click', function(){
    overlay5.style.display="none";
  })
  fermer7.addEventListener('click', function(){
    overlay6.style.display="none";
  })
  fermer8.addEventListener('click', function(){
    overlay7.style.display="none";
  })
  fermer9.addEventListener('click', function(){
    overlay8.style.display="none";
  })
  fermer10.addEventListener('click', function(){
    overlay9.style.display="none";
  })
  fermer11.addEventListener('click', function(){
    overlay10.style.display="none";
  })
  fermer12.addEventListener('click', function(){
    overlay11.style.display="none";
  })
  fermer13.addEventListener('click', function(){
    overlay12.style.display="none";
  })
  fermer14.addEventListener('click', function(){
    overlay13.style.display="none";
  })

   achat1.addEventListener('click',function(){
    overlay.style.display="block";
  });

  achat2.addEventListener('click',function(){
    overlay1.style.display="block";
  });
  
  achat3.addEventListener('click',function(){
    overlay2.style.display="block";
  });
  
  achat4.addEventListener('click',function(){
    overlay3.style.display="block";
  });
  
  achat5.addEventListener('click',function(){
    overlay4.style.display="block";
  });
  
  achat6.addEventListener('click',function(){
    overlay5.style.display="block";
  });
  
  achat7.addEventListener('click',function(){
    overlay6.style.display="block";
  });
  
  achat8.addEventListener('click',function(){
    overlay7.style.display="block";
  });
  
  achat9.addEventListener('click',function(){
    overlay8.style.display="block";
  });
  
  achat10.addEventListener('click',function(){
    overlay9.style.display="block";
  });
  
  achat11.addEventListener('click',function(){
    overlay10.style.display="block";
  });
  
  achat12.addEventListener('click',function(){
    overlay11.style.display="block";
  });
  
  achat13.addEventListener('click',function(){
    overlay12.style.display="block";
  });
  
  achat14.addEventListener('click',function(){
    overlay13.style.display="block";
  });


//  Erreur nom trop long

input_nom1.addEventListener("input", function(){
  if(this.value.length >15){
   document.getElementById('erreur_nom1').style.display="block";
   this.value="";
  }else{
    this.value = this.value.toUpperCase();
  }
 });

  input_nom2.addEventListener("input", function(){
      if(this.value.length >15){
       document.getElementById('erreur_nom2').style.display="block";
       this.value="";
      }else{
      this.value = this.value.toUpperCase();
    }
     });

     input_nom3.addEventListener("input", function(){
      if(this.value.length >15){
       document.getElementById('erreur_nom3').style.display="block";
       this.value="";
      }else{
      this.value = this.value.toUpperCase();
    }
     });
     
     input_nom4.addEventListener("input", function(){
      if(this.value.length >15){
       document.getElementById('erreur_nom4').style.display="block";
       this.value="";
      }else{
      this.value = this.value.toUpperCase();
    }
     });
     input_nom5.addEventListener("input", function(){
      if(this.value.length >15){
       document.getElementById('erreur_nom5').style.display="block";
       this.value="";
      }else{
      this.value = this.value.toUpperCase();
    }
     });
     input_nom6.addEventListener("input", function(){
      if(this.value.length >15){
       document.getElementById('erreur_nom6').style.display="block";
       this.value="";
      }else{
      this.value = this.value.toUpperCase();
    }
     });
     input_nom7.addEventListener("input", function(){
      if(this.value.length >15){
       document.getElementById('erreur_nom7').style.display="block";
       this.value="";
      }else{
      this.value = this.value.toUpperCase();
    }
     });
     input_nom8.addEventListener("input", function(){
      if(this.value.length >15){
       document.getElementById('erreur_nom8').style.display="block";
       this.value="";
      }else{
      this.value = this.value.toUpperCase();
    }
     });
     input_nom9.addEventListener("input", function(){
      if(this.value.length >15){
       document.getElementById('erreur_nom9').style.display="block";
       this.value="";
      }else{
      this.value = this.value.toUpperCase();
    }
     });
     input_nom10.addEventListener("input", function(){
      if(this.value.length >15){
       document.getElementById('erreur_nom10').style.display="block";
       this.value="";
      }else{
      this.value = this.value.toUpperCase();
    }
     });
     input_nom11.addEventListener("input", function(){
      if(this.value.length >15){
       document.getElementById('erreur_nom11').style.display="block";
       this.value="";
      }else{
      this.value = this.value.toUpperCase();
    }
     });
     input_nom12.addEventListener("input", function(){
      if(this.value.length >15){
       document.getElementById('erreur_nom12').style.display="block";
       this.value="";
      }else{
      this.value = this.value.toUpperCase();
    }
     });
     input_nom13.addEventListener("input", function(){
      if(this.value.length >15){
       document.getElementById('erreur_nom13').style.display="block";
       this.value="";
      }else{
      this.value = this.value.toUpperCase();
    }
     });
     input_nom14.addEventListener("input", function(){
      if(this.value.length >15){
       document.getElementById('erreur_nom14').style.display="block";
       this.value="";
      }else{
      this.value = this.value.toUpperCase();
    }
     });

    //  Prenom
    input_prenom1.addEventListener('input', function(){
      this.value = this.value.toLowerCase();
  })

  input_prenom2.addEventListener('input', function(){
    this.value = this.value.toLowerCase();
})

input_prenom3.addEventListener('input', function(){
  this.value = this.value.toLowerCase();
})

input_prenom4.addEventListener('input', function(){
  this.value = this.value.toLowerCase();
})

input_prenom5.addEventListener('input', function(){
  this.value = this.value.toLowerCase();
})

input_prenom6.addEventListener('input', function(){
  this.value = this.value.toLowerCase();
})

input_prenom7.addEventListener('input', function(){
  this.value = this.value.toLowerCase();
})

input_prenom8.addEventListener('input', function(){
  this.value = this.value.toLowerCase();
})

input_prenom9.addEventListener('input', function(){
  this.value = this.value.toLowerCase();
})

input_prenom10.addEventListener('input', function(){
  this.value = this.value.toLowerCase();
})

input_prenom11.addEventListener('input', function(){
  this.value = this.value.toLowerCase();
})

input_prenom12.addEventListener('input', function(){
  this.value = this.value.toLowerCase();
})


input_prenom13.addEventListener('input', function(){
  this.value = this.value.toLowerCase();
})

input_prenom14.addEventListener('input', function(){
  this.value = this.value.toLowerCase();
})

//  span erreur
    numero.addEventListener('input', function(){
      if(this.value.length > 8){
        document.getElementById('erreur_numero1').style.display="block";
        this.value="";
      }
    });

numero2.addEventListener('input', function(){
    if(this.value.length > 8){
      document.getElementById('erreur_numero2').style.display="block";
      this.value="";
    }
  })

  numero3.addEventListener('input', function(){
    if(this.value.length > 8){
      document.getElementById('erreur_numero3').style.display="block";
      this.value="";
    }
  })

  numero4.addEventListener('input', function(){
    if(this.value.length > 8){
      document.getElementById('erreur_numero4').style.display="block";
      this.value="";
    }
  })


  numero5.addEventListener('input', function(){
    if(this.value.length > 8){
      document.getElementById('erreur_numero5').style.display="block";
      this.value="";
    }
  })

  numero6.addEventListener('input', function(){
    if(this.value.length > 8){
      document.getElementById('erreur_numero6').style.display="block";
      this.value="";
    }
  })
  numero7.addEventListener('input', function(){
    if(this.value.length > 8){
      document.getElementById('erreur_numero7').style.display="block";
      this.value="";
    }
  })

  numero8.addEventListener('input', function(){
    if(this.value.length > 8){
      document.getElementById('erreur_numero8').style.display="block";
      this.value="";
    }
  })

  numero9.addEventListener('input', function(){
    if(this.value.length > 8){
      document.getElementById('erreur_numero9').style.display="block";
      this.value="";
    }
  })

  numero10.addEventListener('input', function(){
    if(this.value.length > 8){
      document.getElementById('erreur_numero10').style.display="block";
      this.value="";
    }
  })

  numero11.addEventListener('input', function(){
    if(this.value.length > 8){
      document.getElementById('erreur_numero11').style.display="block";
      this.value="";
    }
  })

  numero12.addEventListener('input', function(){
    if(this.value.length > 8){
      document.getElementById('erreur_numero12').style.display="block";
      this.value="";
    }
  })

  numero13.addEventListener('input', function(){
    if(this.value.length > 8){
      document.getElementById('erreur_numero13').style.display="block";
      this.value="";
    }
  })

  numero14.addEventListener('input', function(){
    if(this.value.length > 8){
      document.getElementById('erreur_numero14').style.display="block";
      this.value="";
    }
  })

