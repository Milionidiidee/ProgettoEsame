function elimina(prodotto){
	location.replace("http://localhost/PW%202020/progettoesame/carrello.php?elimina="+prodotto);
}

function positionFooter(){
  var holder = document.getElementById("form-holder");
  holder.style.minHeight = (window.innerHeight - 100) + "px";
}

function cambia(attuale, intero){
	var frammento1;
    var frammento2;
    frammento1 = document.getElementById("form-pt-"+(attuale+intero));
    if((attuale == 0)&&(intero > 0)){
    	frammento2 = document.getElementById("riassunto-prodotti");
    }else if((attuale == 1)&&(intero < 0)){
    	frammento1 = document.getElementById("riassunto-prodotti");
        frammento2 = document.getElementById("form-pt-"+attuale);
    }else{
    	frammento2 = document.getElementById("form-pt-"+attuale);
    }
    frammento2.style.display = "none";
    frammento1.style.display = "block";
}

function riempi(){
	var array = ["città", "cap", "indirizzo", "interno", "carta", "cvc", "scadenza"];
    array.forEach(collega);
}

function collega(parola, indice){
	var input = document.getElementById(parola);
    var output = document.getElementById("r-"+parola);
    output.innerText = input.value;
}

var i = 0;

function putImmagine(id){
	var div = document.getElementsByClassName("thumbnail")[i];
    i++;
    div.style.backgroundImage = "url('Immagini/Prodotti/"+id+".png')";
}