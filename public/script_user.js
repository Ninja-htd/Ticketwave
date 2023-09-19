alert('coucou');
let deconnecter = document.getElementById('deconnecter');
deconnecter.addEventListener('click', function(e){
    e.preventDefault();
    if(confirm('Souhaitez-vous vraiment déconnecter ?')){
      location.href = deconnecter;
    }
}) 