<script>
 $( document ).ready(function() { 
 	$.getScript('js/jquery.easing-1.3.pack.js'); });  
  function carregar(pagina){
		if (screen.width <= 767){//saber tamanho da janela       
             Displayed();
    	}
    	 $("#divProd").load(pagina);//carrega slider produto
    }
function Displayed(){   
var d= document.getElementById("Down").style.display;
	if (d=="block") {
		//alert("block");
	document.getElementById("Down").style.display="none";    	
    }else{
		//alert("none");
		menu = document.getElementById("Down");
		menu.style.display= "block";		
		menu.style.backgroundColor= "black";
	    menu.style.float= "left";
	    //menu.style.width= "15%";
	    menu.style.zIndex= 9999;	    
		menu.style.borderRadius= "5px 5px";			
		menu.style.position="absolute";
	}
}


</script>

<div class="container">
		
		<div class="title text-center">
			
			<h2>Nossos <span class="color">Produtos</span></h2>
			<div class="border" ></div>
		</div>
		
		<br><br>
	<div  class="row subR">	
		<i class="fa fa-bars menuProd" id="menuDown" onclick="Displayed()"></i>
		<div id="Down"><!-- menu mobile -->
			<ul class="text-center">
			<i class="fa fa-home fa-lg homeProd" 
			onclick="carregar('includes/produtos/init.php')" alt="Inicio" title="Inicio"></i>	
			<li>				
				<a href="#produtos" onclick="carregar('includes/produtos/acessorio/acessorio.html')" class="filter" >Acessorio</a>
			</li>
			<li>				
				<a href="#produtos" onclick="carregar('includes/produtos/aditivo/aditivo.html')" class="filter" >Aditivo</a>
			</li>
			<li>
				<a href="#produtos" onclick="carregar('includes/produtos/amortecedor/amortecedor.html')" class="filter">Amortecedor</a>
			</li>
			<li>
				<a href="#produtos" onclick="carregar('includes/produtos/balanca/balanca.html')" class="filter">Balança</a>
			</li>
			<li>
				<a href="#produtos" onclick="carregar('includes/produtos/bieleta/bieleta.html')" class="filter">Bieleta</a>
			</li>
			<li>
				<a href="#produtos" onclick="carregar('includes/produtos/bomba/bomba.html')" class="filter">Bomba</a>
			</li>
			<li>
				<a href="#produtos" onclick="carregar('includes/produtos/bucha/bucha.html')" class="filter">Bucha</a>
			</li>
			<li>
				<a href="#produtos" onclick="carregar('includes/produtos/coxim/coxim.html')" class="filter">Coxim</a>
			</li>
			<li>
				<a href="#produtos" onclick="carregar('includes/produtos/cabo/cabo.html')" class="filter">Cabo</a>
			</li>
			
			<li>
				<a href="#produtos" onclick="carregar('includes/produtos/cilindro/cilindro.html')" class="filter">Cilindro</a>
			</li>
			<li>
				<a href="#produtos" onclick="carregar('includes/produtos/coifa/coifa.html')" class="filter">Coifa</a>
			</li>
			<li>
				<a href="#produtos" onclick="carregar('includes/produtos/disco/disco.html')" class="filter">Disco</a>
			</li>
			<li>
				<a href="#produtos" onclick="carregar('includes/produtos/filtro/filtro.html')" class="filter">Filtro</a>
			</li>
			<li>
				<a href="#produtos" onclick="carregar('includes/produtos/fluido/fluido.html')" class="filter">Fluido</a>
			</li>
			<li>
				<a href="#produtos" onclick="carregar('includes/produtos/homocinetica/homocinetica.html')" class="filter">Homocinetica</a>
			</li>
			<li>
				<a href="#produtos" onclick="carregar('includes/produtos/limpeza/limpeza.html')" class="filter">Limpeza</a>
			</li>	
			<li>
				<a href="#produtos" onclick="carregar('includes/produtos/oleo/oleo.html')" class="filter">Óleo</a>
			</li>
			<li>
				<a href="#produtos" onclick="carregar('includes/produtos/pneu/pneu.html')" class="filter">Pneu</a>
			</li>
			<li>
				<a href="#produtos" onclick="carregar('includes/produtos/rolamento/rolamento.html')" class="filter">Rolamento</a>
			</li>
					
			
			<a href="#catalogo">
			<i class="fa fa-newspaper-o homeProd sc"  id="rote" title="Catálogo dos produtos"></i>
			</a>
		</div>
		<div class="prod-filter  menuFilter col-lg-1 col-md-2 col-sm-2 ">
			<ul class="text-center"><!-- menu desktop -->
			<i class="fa fa-home fa-lg homeProd" 
			onclick="carregar('includes/produtos/init.php')" alt="Inicio" title="Inicio"></i>	
			<li>				
				<a href="#produtos" onclick="carregar('includes/produtos/acessorio/acessorio.html')" class="filter" >Acessorio</a>
			</li>
			<li>				
				<a href="#produtos" onclick="carregar('includes/produtos/aditivo/aditivo.html')" class="filter" >Aditivo</a>
			</li>
			<li>
				<a href="#produtos" onclick="carregar('includes/produtos/amortecedor/amortecedor.html')" class="filter">Amortecedor</a>
			</li>
			<li>
				<a href="#produtos" onclick="carregar('includes/produtos/balanca/balanca.html')" class="filter">Balança</a>
			</li>
			<li>
				<a href="#produtos" onclick="carregar('includes/produtos/bieleta/bieleta.html')" class="filter">Bieleta</a>
			</li>
			<li>
				<a href="#produtos" onclick="carregar('includes/produtos/bomba/bomba.html')" class="filter">Bomba</a>
			</li>
			<li>
				<a href="#produtos" onclick="carregar('includes/produtos/bucha/bucha.html')" class="filter">Bucha</a>
			</li>
			<li>
				<a href="#produtos" onclick="carregar('includes/produtos/coxim/coxim.html')" class="filter">Coxim</a>
			</li>
			<li>
				<a href="#produtos" onclick="carregar('includes/produtos/cabo/cabo.html')" class="filter">Cabo</a>
			</li>
			
			<li>
				<a href="#produtos" onclick="carregar('includes/produtos/cilindro/cilindro.html')" class="filter">Cilindro</a>
			</li>
			<li>
				<a href="#produtos" onclick="carregar('includes/produtos/coifa/coifa.html')" class="filter">Coifa</a>
			</li>
			<li>
				<a href="#produtos" onclick="carregar('includes/produtos/disco/disco.html')" class="filter">Disco</a>
			</li>
			<li>
				<a href="#produtos" onclick="carregar('includes/produtos/filtro/filtro.html')" class="filter">Filtro</a>
			</li>
			<li>
				<a href="#produtos" onclick="carregar('includes/produtos/fluido/fluido.html')" class="filter">Fluido</a>
			</li>
			<li>
				<a href="#produtos" onclick="carregar('includes/produtos/homocinetica/homocinetica.html')" class="filter">Homocinetica</a>
			</li>
			<li>
				<a href="#produtos" onclick="carregar('includes/produtos/limpeza/limpeza.html')" class="filter">Limpeza</a>
			</li>	
			<li>
				<a href="#produtos" onclick="carregar('includes/produtos/oleo/oleo.html')" class="filter">Óleo</a>
			</li>
			<li>
				<a href="#produtos" onclick="carregar('includes/produtos/pneu/pneu.html')" class="filter">Pneu</a>
			</li>
			<li>
				<a href="#produtos" onclick="carregar('includes/produtos/rolamento/rolamento.html')" class="filter">Rolamento</a>
			</li>

			
			<a href="#catalogo">
			<i class="fa fa-newspaper-o homeProd sc"  id="rote" title="Catálogo dos produtos"></i>
			</a>
			</ul>
		</div>

		<div class="col-lg-10 col-md-9 col-sm-10 col-xs-12" id="divProd" align="center"  >
			<?php include('includes/produtos/init.php'); ?>
		</div>

	</div> 

				

<!--
<div align="center"  >
	<?php  // include('includes/promocao.php'); ?>
</div>

<div class=" container parallax-section" id="vendidos"  class="bg-one" >
	<div class="title text-center" >
					
			<h2>Produtos em<span class="color">  destaque</span> </h2>
			<div class="border" ></div> 			
		</div>	
	<div class="row subR">
		<div class="col-md-3 col-sm-3 col-xs-6   imgC" >
			<a href="img/produtos/CAS3383745.png" data-lightbox="imgV" 
			data-title="EDGE TITANIUM 5W30" >				
				<img src="img/produtos/CAS3383745.png" class="prodVend animProd  " title="EDGE TITANIUM 5W30">
			</a><br><span class="vend"><b>	
				EDGE TITANIUN 5W30 </b></span>
		</div>					
		<div class="col-md-3 col-sm-3 col-xs-6   imgC" >	
			<a href="img/produtos/CAS3374543.png" data-lightbox="imgV" 
			data-title="ACTEVO EXTRA 4T 10W30">
				<img src="img/produtos/CAS3374543.png" class="prodVend animProd " 
				title="ACTEVO EXTRA 4T 10W30 ">
			</a><br><span class="vend"><b>	
				ACTEVO EXTRA 4T 10W30  					</b></span>
		</div>					
		<div class="col-md-3 col-sm-3 col-xs-6   imgC" >
			<a href="img/produtos/CAS3360511.png" data-lightbox="imgV" 
			data-title="OLEO MOTOR MOTO 2T">
			<img src="img/produtos/CAS3360511.png" class="prodVend animProd " 
			title="OLEO MOTOR MOTO 2T ">
			</a><br><span class="vend"><b>	
				OLEO MOTOR MOTO 2T  </b></span>
		</div>					
		
		<div class="col-md-3 col-sm-3 col-xs-6   imgC" >	
			<a href="img/produtos/CAS3100026.png" data-lightbox="imgV" 
			data-title="OLEO MOTOCRAFT MARCON">
				<img src="img/produtos/CAS3100026.png" class="prodVend animProd "
				title="OLEO MOTOCRAFT MARCON" >
			</a><br><span class="vend"><b>
				OLEO MOTOCRAFT MARCON</b></span>			
		</div>		
	</div> 

	<div class=" row subR">
		<div class="col-md-3 col-sm-3 col-xs-6   imgC" >
			<a href="img/produtos/CAS3381099.png" data-lightbox="imgV" 
			data-title="POWER 1 RACING 10W50">
				<img src="img/produtos/CAS3381099.png" class="prodVend animProd " 
				title="POWER 1 RACING 10W50">
			</a><br><span class="vend"><b>POWER 1 RACING 10W50</b></span>							
		</div>						
		<div class="col-md-3 col-sm-3 col-xs-6   imgC" >	
			<a href="img/produtos/cas3503008.png" data-lightbox="imgV" 
			data-title="STIHL 8017H ">
				<img src="img/produtos/cas3503008.png" class="prodVend animProd " 
				title="STIHL 8017H ">
			</a><br><span class="vend"><b>STIHL 8017H </b></span>									
		</div>				
		<div class="col-md-3 col-sm-3 col-xs-6   imgC" >
			<a href="img/produtos/cas3380148.png" data-lightbox="imgV" 
			data-title="GTX ALTA KM 25W60 ">
			<img src="img/produtos/cas3380148.png" class="prodVend animProd " 
			title="GTX ALTA KM 25W60 ">
			</a><br><span class="vend"><b>	GTX ALTA KM 25W60 </b></span>			
		</div>					
		<div class="col-md-3 col-sm-3 col-xs-6   imgC" >	
			<a href="img/produtos/cas3377741.png" data-lightbox="imgV" 
			data-title="MAGNATEC 10W30">
				<img src="img/produtos/cas3377741.png" class="prodVend animProd " 
				title="MAGNATEC 10W30">
			</a><br><span class="vend"><b>MAGNATEC 10W30 </b></span>			
		</div>
		
	</div>	
</div> container mais vendidos-->		

</div> <!--container principal-->