if(document.getElementById("tutto") != null){
    var tutto = document.getElementById("tutto");
 }else if(document.getElementById("errore") != null){
     var errore = document.getElementById("errore");
 }
 var altezza = parseInt(window.innerHeight);   
 
 
 function adjustPage(){
     if(tutto != null){
         tutto.style.minHeight = altezza-100 + "px";
     }else if(errore != null){
         errore.style.minHeight = altezza-105 + "px";
     }
 }
 
 window.addEventListener("orientationchange", adjustPage());