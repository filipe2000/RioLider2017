<script>
 $( document ).ready(function() { 
 	$.getScript('js/jquery.easing-1.3.pack.js'); });  
  function carregar(pagina){
        $("#divProd").load(pagina);
    }
</script>

<div class="container" >

		<div class="title text-center">
			
			<h2>Nossos <span class="color">Produtos</span></span></h2>
			<div class="border" ></div>
		</div>

<div>
	<div  >	
		<div class="prod-filter">
			<ul class="text-center"  >
			<i class="fa fa-home fa-lg homeProd" onclick="carregar('includes/produtos/init.php')" alt="Inicio" title="Inicio"></i>								
			<li>				
				<a href="#produtos" onclick="carregar('includes/produtos/filtros/filtros.html')" class="filter" >Filtros</a>
			</li>
			<li>
				<a href="#produtos" onclick="carregar('includes/produtos/oleos/oleos.html')" class="filter" >Óleos</a>
			</li>
			<li>
				<a href="#produtos" onclick="carregar('includes/produtos/bombas/bombas.html')" class="filter">Bombas</a>
			</li>
			<li>
				<a href="#produtos" onclick="carregar('includes/produtos/cabos/cabos.html')" class="filter">Cabos</a>
			</li>
			<li>
				<a href="#produtos" onclick="carregar('includes/produtos/amortecedor/amortecedor.html')" class="filter">Amortecedor</a>
			</li> 
			<a href="#catalogo">
			<i class="fa fa-cog fa-lg roter"  id="rote" title="Catálogo dos produtos"></i>
			</a>
			<!-- pesquisa
			<div id="divBusca">
			    <input type="text" id="txtBusca" placeholder="Pesquisar..."/>
			    <i class="fa fa-search pesq" aria-hidden="true"  id="pesqp" title="Pesquisa"></i>
			</div>-->
			</ul>
		</div>
	</div> 
</div>
				
<div id="divProd" align="center"  >
	<?php include('includes/produtos/init.php'); ?>
</div>

<div align="center"  >
	<?php  include('includes/promocao.php'); ?>
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
	<!--</div> 

	<div class=" row subR">row-->
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
		
	</div><!-- row -->	

</div> <!-- container mais vendidos-->		
</div> <!--container principal-->