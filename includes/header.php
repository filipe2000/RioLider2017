<script type="text/javascript">
    function HideTogle(){//fechar menu
    if (screen.width <= 767){//saber tamanho da janela, pois exibe toggle       
             $("#btToggle").click();
    }//if    
    }//func
    function HideTg(){//link da imagem cativo, volta para home fechando menu
          
       if (screen.width <= 767 ){//saber tamanho da janela, pois exibe toggle
        var value = $('.navbar-collapse').attr('aria-expanded');
        if(value=="true"){//executa o click se menu estiver aberto
             $("#lkHome").click();
        }else{
            location.href="#home";
        }
    }//if
    else{//se janela maior
        location.href="#home";
    }
    }// func 
    function anc(objID) {
        document.getElementById(objID).focus();
    } /* 
    function OffDefine(){
         define('jquery.easing-1.3.pack.js', false); 
    }*/
    $(document).ready(function(){

        var txtTitleLider="Liderança no segmento automotivo!";
        document.getElementById("RL").innerHTML=txtTitleLider; 
        $(".sc").click(function(event)
        {     
            openToggle();   
            event.preventDefault();//animação deslisamento
            $('html,body').animate({scrollTop:$(this.hash).offset().top}, 900);
        });
    });
    
</script>
<style type="text/css">
@media screen and (max-width:767px) 
{
    .navbar-inverse
    {
    position: absolute !important;
    }
}  
</style>


<header id="navigation" class="navbar navbar-inverse">
<div class="container">
    <div class="navbar-header">
		<!-- logo -->
        <span class="navbar-brand" onclick="HideTogle()">
			<img src="img/logos/logo.png" />            
		</span>
        <span class="titleLider" id="RL">Liderança no segmento automotivo!</span>
		<!-- /logo -->
        <!-- responsive nav button -->
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse" id="btToggle">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <!-- /responsive nav button -->
    </div>

	<!-- main nav -->
    <nav class="collapse navbar-collapse navbar-right" role="Navigation" 
        onclick="HideTogle()">
        <div class="portfolio-filter clearfix">
            <ul id="nav" class="nav navbar-nav">
                <li><a href="#body" id="lkHome">Principal</a></li>
                <li><a href="#about" >Empresa</a></li>
                <li><a href="#produtos" >Produtos</a></li> 
                <li><a href="#fornec" >Fornecedores</a></li>
                <li><a href="#catalogo" >Catálogo</a></li>
                <li><a href="#contato"  >Contato</a></li>
            </ul>
        </div>  
    </nav>

	<!-- /main nav -->
	
</div>
</header>