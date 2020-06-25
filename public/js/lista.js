function generaLista(colonna, ordine, nome, categoria, venditore, voto, costomin, costomax, spedizionemax, offerta, pagina, caratteri){
	var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
       document.getElementById("lista").innerHTML = this.responseText;
      }
    };
    xhttp.open("POST", "generalista.php", true);
    if((colonna != null) && (ordine != null)){
      xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
      xhttp.send("colonna="+colonna+"&ordine="+ordine+"&nome="+nome+"&categoria="+categoria+"&venditore="+venditore+"&voto="+voto+"&costomin="+costomin+"&costomax="+costomax+"&spedizionemax="+spedizionemax+"&offerta="+offerta+"&pagina="+pagina+"&caratteri="+caratteri);
	}else{
    	xhttp.send();
    }
    if(window.innerWidth < 576){
    	positionFooter(250);
    }else{
    	positionFooter(125);
    }
}

function selezionaEriordina(){
	var ordinamento = document.getElementById("ordinamento").value;
    switch(ordinamento){
    	case "1": colonna = "nome"; ordine = "ASC";break;
    	case "2": colonna = "nome"; ordine = "DESC";break;
    	case "3": colonna = "costo"; ordine = "ASC";break;
    	case "4": colonna = "costo"; ordine = "DESC";break;
    }
    
    var nome = document.getElementById("nome").value;
    var categoria = document.getElementById("categoria").value;
    var venditore = document.getElementById("venditore").value;
    var voto = document.getElementById("voto").value;
    var costomin = document.getElementById("costomin").value;
    var costomax = document.getElementById("costomax").value;
    var spedizionemax = document.getElementById("spedizionemax").value;
    var offerta = "off";
    if (document.getElementById('offerta').checked){
    	var offerta = document.getElementById("offerta").value;
    }    
    var pagina;
    if(document.getElementById("pagina") == null){
    	pagina = 0;
    }else{
    	pagina = document.getElementById("pagina").value;
    }
    var caratteri = document.getElementById("caratteri").value;
    generaLista(colonna, ordine, nome, categoria, venditore, voto, costomin, costomax, spedizionemax, offerta, pagina, caratteri);
}

function positionFooter(sottrazione){
  var form = document.getElementById("fake-form");
  form.style.minHeight = (window.innerHeight - sottrazione) + "px";
}

function pageForward(){
	var pagina = document.getElementById("pagina");
    if(pagina.value != NaN){
    	pagina.value = parseInt(pagina.value) + 1;
    }else{
    	pagina.value = 0;
    }
        
    selezionaEriordina();
}

function pageBack(){
	var pagina = document.getElementById("pagina");
    if ((pagina.value != NaN) && (parseInt(pagina.value) > 0)){
    	pagina.value = parseInt(pagina.value) - 1;;
    }else{
    	pagina.value = 0;
    }
    selezionaEriordina();
}

function calcolaCaratteri(){
	var caratteri = document.getElementById("caratteri");
    if(window.innerWidth < 992){caratteri.value = 6}
    else if(window.innerWidth < 992){caratteri.value = 6}
    else{caratteri.value = 0}
}

function setCategoria(categoria){
	if(categoria != ""){
    	document.getElementById("categoria").value = categoria;
    }
}

window.addEventListener("orientationchange", function(){
	calcolaCaratteri();
    selezionaEriordina();
});