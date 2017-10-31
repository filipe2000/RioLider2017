
<div class="container" >
<div class="title text-center " >
	<h2>Entre em <span class="color">Contato</span></h2>
	<div class="border"></div>
</div>

<div class="row subR " >
	<div class="col-md-4 col-sm-6 "  >
		<h4 align="center"> <b>Rio Lider Parts LTDA - ME</b></h4>
		<p class="text-justify">
		Entre em contato para tirar suas dúvidas ou enviar sugestões e críticas.
		Sua opnião é muito importante para nós.</p><hr>
			
		<div class="row subR con-info clearfix cont">	<!-- sub linha-->
			<div class="col-md-1 col-xs-1 " >				
				<i class="fa fa-home "></i>
			</div><!-- col 1-->	
				<div class="col-md-11 col-xs-11 text-left cont" >
					Av. Jiulio Caruso, nº 430  
				</div><!-- col 3-->
		</div><!-- row-->

		<div class="row subR con-info clearfix ">	
			<div class="col-md-1 col-xs-1"></div>	
			<div class="col-md-11 col-xs-11 text-left cont" >	
				Belmonte,Volta Redonda-RJ 
			</div>
		</div><!-- row-->

		<div class="row subR con-info clearfix cont">		
			<div class="col-md-1 col-xs-1 " >
				<i class="fa fa-phone"></i>
			</div><!-- col 1-->
			<div class="col-md-11 col-xs-11 cont text-left" >
				(24) 3337-3434 
			</div><!-- col 3-->
		</div><!-- row-->

		<div class="row subR con-info clearfix  cont text-left">		
			<div class="col-md-1 col-md-offset-1 col-xs-2 col-xs-offset-1 " style="color: red;">
			(21)	
			</div>
			<div class="col-md-9 col-xs-9  " >
			 &nbsp;2018-0444
			</div>		
		</div><!-- row-->	

		<div class="row subR con-info clearfix ">		
			<div class="col-md-1 col-xs-1" >		
			</div><!-- col 1-->
			<div class="col-md-11 col-xs-11 cont text-left" >
				Id- 119 * 98301
			</div><!-- col 3-->
		</div><!-- row-->

		<div class="row subR con-info clearfix text-left cont">
			<div class="col-md-10 col-md-offset-1 col-xs-10 col-xs-offset-1 ">
			<span style="margin-left: 0px;">(24) 99255-9666</span>
			 <i class="fa fa-whatsapp" style="margin-left: 5px;"></i>
			</div>	
		</div><!-- row-->
		

		<div class="row subR con-info clearfix cont">
			<div class="col-md-1 col-xs-1 " >
				<i class="fa fa-envelope"></i>
			</div>
			<div class="col-md-11 col-xs-11 cont text-left" >	
				comercial@riolider.com.br
			</div>
		</div>	<!-- row-->
			<hr>
			<div class="social-icon">
				<ul><!--
					<li><a href="https://www.facebook.com/cativobrasil/" target="_blank">
					<i class="fa fa-facebook"></i></a></li>
					<li><a href="https://www.linkedin.com/company/cativo-comercial-e-log%C3%ADstica " target="_blank">
					<i class="fa fa-linkedin"></i></a></li>-->			
					<!-- <li><a href="#"><i class="fa fa-youtube"></i></a></li>-->
				</ul>	
			</div>
	</div><!-- col 4-->
	
	<div class="contact-form col-md-4 col-sm-6 Up"   >
		<div align="center"><h5>CONTATO</h5></div>
		<form id="contact-form" method="post" action="js/sendmail.php" role="form">
		
			<div class="form-group">
				<input type="text" placeholder="Seu nome" class="form-control" name="name" id="name">
			</div>
			
			<div class="form-group">
				<input type="email" placeholder="Seu Email" class="form-control" name="email" id="email">
			</div>
			
			<div class="form-group">
				<input type="text" placeholder="Assunto" class="form-control" name="subject" id="subject">
			</div>
			
			<div class="form-group">
				<textarea rows="6" placeholder="Mensagem" class="form-control" name="message" id="message"></textarea>	
			</div>
			
			<div id="mail-success" class="success">
				Obrigado. O E-mail está a caminho :)
			</div>
			
			<div id="mail-fail" class="error">
				Desculpe, ocorreu erro, tente depois :(
			</div>
			
			<div id="cf-submit"><!-- id="contact-submit"-->
				<input type="submit"  id="contact-submit" class="btn btn-transparent" value="Enviar">
			</div>						
			
		</form>
	</div>

	<div class="col-md-4 col-sm-4 mapa">
	<div style='overflow:hidden;height:300px;width:90%;'>
	<div id='gmap_canvas' style='height:300px;width:90%;'></div>
	<div><small><a href="http://embedgooglemaps.com">embed google map	</a></small>
	</div>
	<div><small><a href="http://www.proxysitereviews.com /categories/scrapebox-proxies/">scrapebox proxies</a></small></div>
	<style>#gmap_canvas img{max-width:none!important;background:none!important}</style>
	</div>
	<script type='text/javascript'>
	function init_map(){
		var myOptions = {zoom:15,center:new google.maps.LatLng(-22.514228144998853,-44.13099674477461),mapTypeId: google.maps.MapTypeId.HYBRID};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(-22.514228144998853,-44.13099674477461)});infowindow = new google.maps.InfoWindow({content:'<strong>Rio Lider Parts</strong><br>Avenida Jiulio Caruso 430,Belmonte, Volta Redonda, RJ<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}
		google.maps.event.addDomListener(window, 'load', init_map);
	</script>
	</div>
</div> <!-- end row -->
<!-- Google Map -->
			



</div> <!-- end container -->