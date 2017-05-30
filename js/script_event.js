var isPaused = false;
var intervalo;
function mouseOut(){
isPaused = false;
}
function mouseOver(){
 isPaused = true;
}
function jump(img){
 isPaused = true;
 elemento = document.querySelector(".ativo");
 elemento.classList.remove("ativo");
 document.getElementById("i"+img).classList.add("ativo");
 document.getElementById("t"+elemento.getAttribute("name")).classList.remove("thumbs-ativo");
 document.getElementById("t"+img).classList.add("thumbs-ativo");
 document.getElementById("t"+elemento.getAttribute("name")).classList.add("thumbs");
 
}

function setaImagem(){
var settings = {
primeiraImg: function(){
elemento = document.querySelector("#slider a:first-child");
elemento.classList.add("ativo");
this.legenda(elemento);
},
 
slide: function(){
	if (!isPaused){
		/*
			elemento = document.querySelector(".ativo");
			document.getElementById("t"+elemento.getAttribute("name")).calassList.add("thumbs");
			document.getElementById("t"+elemento.getAttribute("name")).calassList.remove("thumbs-ativo");
			if(elemento.nextElementSibling){
			elemento.nextElementSibling.classList.add("ativo");
			settings.legenda(elemento.nextElementSibling);
			elemento.classList.remove("ativo");
			}else{
			elemento.classList.remove("ativo");
			settings.primeiraImg();
			}*/
			settings.proximo();
	}
},
 
proximo: function(){
clearInterval(intervalo);
elemento = document.querySelector(".ativo");
document.getElementById("t"+elemento.getAttribute("name")).classList.remove("thumbs-ativo");
document.getElementById("t"+elemento.getAttribute("name")).classList.add("thumbs");
if(elemento.nextElementSibling){
elemento.nextElementSibling.classList.add("ativo");
settings.legenda(elemento.nextElementSibling);
elemento.classList.remove("ativo");
}else{
elemento.classList.remove("ativo");
settings.primeiraImg();
}
intervalo = setInterval(settings.slide,4000);
},
 
anterior: function(){
clearInterval(intervalo);
elemento = document.querySelector(".ativo");
document.getElementById("t"+elemento.getAttribute("name")).classList.remove("thumbs-ativo");
document.getElementById("t"+elemento.getAttribute("name")).classList.add("thumbs");
if(elemento.previousElementSibling){
elemento.previousElementSibling.classList.add("ativo");
settings.legenda(elemento.previousElementSibling);
elemento.classList.remove("ativo");
}else{
elemento.classList.remove("ativo");	
elemento = document.querySelector("a:last-child");
elemento.classList.add("ativo");
settings.legenda(elemento);
}
intervalo = setInterval(settings.slide,4000);
},
 
legenda: function(obj){
var legenda = obj.querySelector("img").getAttribute("alt");
document.querySelector("figcaption").innerHTML = legenda;
document.getElementById("t"+obj.getAttribute("name")).classList.remove("thumbs");
document.getElementById("t"+obj.getAttribute("name")).classList.add("thumbs-ativo");
},
fechar: function(){
history.go(-1);
}
}
 
//chama o slide
settings.primeiraImg();
 
//chama a legenda
settings.legenda(elemento);
 
//chama o slide à um determinado tempo
intervalo = setInterval(settings.slide,4000);
document.querySelector(".next").addEventListener("click",settings.proximo,false);
document.querySelector(".prev").addEventListener("click",settings.anterior,false);
document.querySelector(".close").addEventListener("click",settings.fechar,false);
document.getElementById("loading").style.visibility="hidden";
}
window.addEventListener("load",setaImagem,false);