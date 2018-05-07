//funktion der gør felt til visning af fejl synlig, og sætter indholdet i teksten
function visfejltekst(fejltekst) {
	document.getElementById('fejlfelt').style.display = "block";
	document.getElementById('fejltekst').innerHTML = fejltekst;  
}

//funktion der gør felt til visning af advarsler synlig, og sætter indholdet i teksten
function visAdvarseltekst(advarseltekst) {
	document.getElementById('advarselfelt').style.display = "block";
	document.getElementById('advarseltekst').innerHTML = advarseltekst;  
}

//funktion der gør felt til visning af advarsler synlig, og sætter indholdet i teksten
function vissuccestekst(succestekst) {
	document.getElementById('succesfelt').style.display = "block";
	document.getElementById('succestekst').innerHTML = succestekst;  
}

function nulstilTekstFelter(){
	document.getElementById('fejlfelt').style.display = "none";
	document.getElementById('advarselfelt').style.display = "none";
	document.getElementById('succesfelt').style.display = "none";
}


function validering(){ //Dette er den store funktion der håndterer validering af alle felter!
	//Fjerner først gamle beskeder
	nulstilTekstFelter();
	
	
	//Tjek at fornavn er udfyldt
	if (document.film_form.titel.value == ""){
		visfejltekst('Titel skal udfyldes!');
		document.film_form.titel.focus();
		return false;
	}
	//Tjek at efternavn er udfyldt
	if (document.film_form.instruktor.value == ""){
		visfejltekst('Instruktør skal udfyldes!');
		document.film_form.instruktor.focus() ;
		return false;
	} 
	
	//Tjek at efternavn er udfyldt
	if (document.film_form.spilletid.value == ""){
		visfejltekst('Spilletid skal udfyldes!');
		document.film_form.spilletid.focus() ;
		return false;
	} 	
    
    //Tjek at efternavn er udfyldt
	if (document.film_form.aarstal.value == ""){
		visfejltekst('Årstal skal udfyldes!');
		document.film_form.aarstal.focus() ;
		return false;
	} 	
    
    //Tjek at efternavn er udfyldt
	if (document.film_form.beskrivelse.value == ""){
		visfejltekst('Beskrivelse skal udfyldes!');
		document.film_form.beskrivelse.focus() ;
		return false;
	} 	
    
    //Tjek at efternavn er udfyldt
	if (document.film_form.sprog.value == ""){
		visfejltekst('Sprog skal udfyldes!');
		document.film_form.sprog.focus() ;
		return false;
	} 	
    
    //Tjek at efternavn er udfyldt
	if (document.film_form.imdbrank.value == ""){
		visfejltekst('IMDB rank skal udfyldes!');
		document.film_form.imdbrank.focus() ;
		return false;
	} 	
    
    //Tjek at efternavn er udfyldt
	if (document.film_form.budget.value == ""){
		visfejltekst('Budget skal udfyldes!');
		document.film_form.budget.focus() ;
		return false;
	} 	
    
    //Tjek at efternavn er udfyldt
	if (document.film_form.indtjening.value == ""){
		visfejltekst('Indtjening skal udfyldes!');
		document.film_form.indtjening.focus() ;
		return false;
	} 
    
    
	
	//Det ser ud til at valideringen er passeret hertil, altså er der ingen fejl. 
	showContent(); //vis at det er gået godt!
	return false; //afslut, men bliv på siden (for at vi kan se resultatet. Skal fjernes hvis vi skal sende formdata, eks. til PHP-side..
}


//function showContent(){	//Viser bare at det er gået godt, samt de bestilte gaver.
	//Kan være en oversigt med flere informationer.
//	vissuccestekst("Filmen er gemt!")
//	return false;
//}