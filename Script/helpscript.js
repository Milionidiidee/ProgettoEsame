function positionFooter(){
    var main = document.getElementsByTagName("main")[0];
    main.style.minHeight = (window.innerHeight - 100) + "px";
 }
 
 var spans = document.getElementsByClassName("scritte");
 var colors = ["red", "yellow", "blue"];
 var indice = 0;
 
 function cambiaIndice(){
     indice++;
     if(indice > 2){
         indice = 0;
     }
 }
 
 setInterval(function(){
     var span = spans[0];
     cambiaIndice();
     span.style.borderColor = colors[indice];
     var span = spans[1];
     cambiaIndice();
     span.style.borderColor = colors[indice];
 }, 3000);
 
 window.addEventListener("orientationchange", positionFooter());