<script type="text/javascript">
    $(document).ready(function(){
        window.setInterval('Start()', 5000);
              
    });
    function Start(){
        $("#bt-next").click();
        if (screen.width <= 767 )//saber tamanho da janela
        {
            document.getElementById("caravana").style.width="100%";
            if (screen.width<=430) 
            {
             document.getElementById("caravana").style.height="200px";   
            }
        } 
    }
    $(function() {
    var you_iframe = $('#caravana');
    var player = $f(you_iframe);

    player.addEvent('ready', function() 
        {
        player.api('setVolume', 0);
        });
    });
</script>

<div align="center" class="container wellcome" >

<section id="main-slider" class="no-margin">
     <div class="carousel slide row" >
            <!--
            <ol class="carousel-indicators">
                <li data-target="#main-slider" data-slide-to="0" class="active"></li>
                <li data-target="#main-slider" data-slide-to="1"></li>
                <li data-target="#main-slider" data-slide-to="2"></li>
                <li data-target="#main-slider" data-slide-to="3"></li>
                <li data-target="#main-slider" data-slide-to="4"></li>
                <li data-target="#main-slider" data-slide-to="5"></li>
                <li data-target="#main-slider" data-slide-to="6"></li>
                <li data-target="#main-slider" data-slide-to="7"></li>
                <li data-target="#main-slider" data-slide-to="8"></li>
                <li data-target="#main-slider" data-slide-to="9"></li>
                <li data-target="#main-slider" data-slide-to="10"></li>
                <li data-target="#main-slider" data-slide-to="11"></li>
                <li data-target="#main-slider" data-slide-to="12"></li>
                <li data-target="#main-slider" data-slide-to="13"></li>
                <li data-target="#main-slider" data-slide-to="14"></li>
                <li data-target="#main-slider" data-slide-to="15"></li>
                <li data-target="#main-slider" data-slide-to="16"></li>
                <li data-target="#main-slider" data-slide-to="17"></li>
                <li data-target="#main-slider" data-slide-to="18"></li>
                <li data-target="#main-slider" data-slide-to="19"></li>
                <li data-target="#main-slider" data-slide-to="20"></li>
                <li data-target="#main-slider" data-slide-to="21"></li>
                <li data-target="#main-slider" data-slide-to="22"></li>
                <li data-target="#main-slider" data-slide-to="23"></li>
                <li data-target="#main-slider" data-slide-to="24"></li>
                <li data-target="#main-slider" data-slide-to="25"></li>
            </ol>
            -->
            <div class="carousel-inner col-md-12 col-sm-12 col-xs-12">

                <div class="item active" style="background-image: url(img/slider/data1/images/1.jpg)">
                    <div class="container">
                    <!--
                        <div class="row slide-margin">
                            <div class="col-sm-6">
                                <div class="carousel-content">
                                    <h1 class="animation animated-item-1">Total Quartz</h1>
                                    <h2 class="animation animated-item-2">Lubrificantes</h2>
                                </div>
                            </div>

                            <div class="col-sm-6 hidden-xs animation animated-item-4">                                
                            </div>

                        </div>
                     -->   
                    </div>
                </div>

                <div class="item" style="background-image: url(img/slider/data1/images/2.jpg)">                    
                </div>

                <div class="item" style="background-image: url(img/slider/data1/images/3.jpg)">                    
                </div>
                 <div class="item" style="background-image: url(img/slider/data1/images/4.jpg)">                    
                </div>
                 <div class="item" style="background-image: url(img/slider/data1/images/5.jpg)">
                </div>
                 <div class="item" style="background-image: url(img/slider/data1/images/6.jpg)">
                </div>
                 <div class="item" style="background-image: url(img/slider/data1/images/7.jpg)">
                </div>
                 <div class="item" style="background-image: url(img/slider/data1/images/8.jpg)">                    
                </div>
                 <div class="item" style="background-image: url(img/slider/data1/images/9.jpg)">
                </div>
                 <div class="item" style="background-image: url(img/slider/data1/images/10.jpg)">
                </div>
                 <div class="item" style="background-image: url(img/slider/data1/images/11.jpg)">
                </div>
                 <div class="item" style="background-image: url(img/slider/data1/images/12.jpg)">
                </div>
                 <div class="item" style="background-image: url(img/slider/data1/images/13.jpg)">
                </div>
                 <div class="item" style="background-image: url(img/slider/data1/images/14.jpg)">
                </div>
                 <div class="item" style="background-image: url(img/slider/data1/images/15.jpg)">
                </div>
                 <div class="item" style="background-image: url(img/slider/data1/images/16.jpg)">
                </div>
                
                 <div class="item" style="background-image: url(img/slider/data1/images/17.jpg)">
                </div>
                
                 <div class="item" style="background-image: url(img/slider/data1/images/18.jpg)">
                </div>
                
                 <div class="item" style="background-image: url(img/slider/data1/images/19.jpg)">
                </div>
                <div class="item" style="background-image: url(img/slider/data1/images/20.jpg)">
                </div>
                
                </div>
        </div>
        <a class="prev hidden-xs" href="#main-slider" data-slide="prev">
          
        </a>
        <a class="next hidden-xs" href="#main-slider" id="bt-next" data-slide="next">
          
        </a>
</section>

<br>
    
    <div class="row subR">
        <div class="col-md-12 col-sm-12 col-xs-12">
        <h2><span class="color">CARAVANA PERFECT 2015</span></h2>    
        <div id="caravana" style="width: 50%; height: 300px;"></id>
        </div>
    </div>
</div><!-- container -->

<script async src="https://www.youtube.com/iframe_api"></script>
    <script>
    //script para o video perfect, sem som
      function onYouTubeIframeAPIReady() 
      {
        var player;
        player = new YT.Player('caravana', 
        {
          videoId: 'DRDyMcZx118', // YouTube Video ID
                       // Player width (in px)
                      // Player height (in px)
          playerVars: 
          {
            autoplay: 1,        // Auto-play the video on load
            controls: 1,        // Show pause/play buttons in player
            showinfo: 0,        // Hide the video title
            modestbranding: 0,  // Hide the Youtube Logo
            loop: 1,            // Run the video in a loop
            fs: 1,              // Hide the full screen button
            cc_load_policty: 0, // Hide closed captions
            iv_load_policy: 3,  // Hide the Video Annotations
            autohide: 0         // Hide video controls when playing
          },
          events: {
            onReady: function(e) {
              e.target.mute();//mudo
            }
          }
        });
      }
    </script>



    




        