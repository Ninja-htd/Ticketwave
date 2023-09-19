let login_box = document.getElementById('login-box');
let section_users = document.getElementById('section_users');
let section_preoccupation = document.getElementById('section_preoccupation');
let info_succes = document.getElementById('info_succes');
let guide = document.getElementById('guide');
let section_paiement = document.getElementById('section_paiement');
function message() {
    document.getElementById('login-box').style.display = "block";
    document.getElementById('section_users').style.display = "none";
    document.getElementById('section_paiement').style.display = "none";
    document.getElementById('section_preoccupation').style.display = "none";
    document.getElementById('guide').style.display = "none";
}
function preoccupation() {
    document.getElementById('section_preoccupation').style.display = "block";
    document.getElementById('guide').style.display = "none";
    document.getElementById('section_paiement').style.display = "none";
    document.getElementById('section_users').style.display = "none";
    document.getElementById('login-box').style.display = "none";
    document.getElementById('info_succes').style.display = "none";
}
function utilisateur() {
    document.getElementById('section_users').style.display = "block";
    document.getElementById('guide').style.display = "none";
    document.getElementById('section_paiement').style.display = "none";
    document.getElementById('section_preoccupation').style.display = "none";
    document.getElementById('login-box').style.display = "none";
    document.getElementById('info_succes').style.display = "none";
}

function ticket() {
    document.getElementById('section_paiement').style.display = "block";
    document.getElementById('guide').style.display = "none";
    document.getElementById('section_preoccupation').style.display = "none";
    document.getElementById('section_users').style.display = "none";
    document.getElementById('login-box').style.display = "none";
    document.getElementById('info_succes').style.display = "none";
}
// Tarifs des lignes 
// for cotonou
let prix1 = '1500 Fcfa'; // cotonou & porto-novo
let prix2 = '3000 Fcfa'; // cotonou & bohicon
let prix3 = '3500 Fcfa'; // cotonou & savalou
let prix4 = '4000 Fcfa'; // cotonou & dassa
let prix5 = '5000 Fcfa'; // cotonou bassila
// for porto-novo
let prix6 = '2000 Fcfa';// porto-novo  & bohicon 
let prix7 = '2500 Fcfa';// porto-novo & savalou
let prix8 = '3500 Fcfa'; // porto-novo & dassa
let prix9 = '6000 Fcfa';//  porto-novo & bassila
// for Bohicon
let prix10 = '1500 Fcfa';//  Bohicon & savalou
let prix11 = '2500 Fcfa'; // Bohicon & dassa
let prix12 = '3500 Fcfa'; //  Bohicon & bassila
// for Savalou
let prix13 = '2000 Fcfa';// Savalou & dassa 
let prix14 = '3500 Fcfa';// Savalou & bassila
// for Dassa
let prix15 = '1500 Fcfa';  //  dassa & bassila

// let ticket =document.getElementById('ticket');
// let telechar =document.getElementById('telechar');
// let dybo =document.getElementById('dybo');
