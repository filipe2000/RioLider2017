
function ws_basic_linear(j,g,a){var c=jQuery;var f=c(this);var e=a.find(".ws_list");var i=c("<div>").addClass("ws_effect ws_basic_linear").css({position:"absolute",top:0,left:0,width:"100%",height:"100%",overflow:"hidden"}).appendTo(a);var b=c("<div>").css({position:"absolute",display:"none","z-index":2,width:"200%",height:"100%",transform:"translate3d(0,0,0)"}).appendTo(i);var h=c("<div>").css({position:"absolute",left:"auto",top:"auto",width:"50%",height:"100%",overflow:"hidden"}),d=h.clone();b.append(h,d);this.go=function(k,n,m){b.stop(1,1);if(m==undefined){m=(!!((k-n+1)%g.length)^j.revers?"left":"right")}else{m=m?"left":"right"}var o=c(g[n]);var l={width:o.width()||j.width,height:o.height()||j.height};o.clone().css(l).appendTo(h).css(m,0);c(g[k]).clone().css(l).appendTo(d).show();if(m=="right"){h.css("left","50%");d.css("left",0)}else{h.css("left",0);d.css("left","50%")}var q={},p={};q[m]=0;p[m]=-a.width();if(j.support.transform){if(m=="right"){q.left=q.right;p.left=-p.right}q={translate:[q.left,0,0]};p={translate:[p.left,0,0]}}e.hide();wowAnimate(b.css({left:"auto",right:"auto",top:0}).css(m,0).show(),q,p,j.duration,"easeInOutExpo",function(){f.trigger("effectEnd");b.hide().find("div").html("")})}};// -----------------------------------------------------------------------------------

jQuery("#wowslider-containerBu").wowSlider({effect:"basic_linear",prev:"",next:"",duration:20*100,delay:20*100,width:600,height:400,autoPlay:true,autoPlayVideo:false,playPause:false,stopOnHover:true,loop:false,bullets:0,caption:true,captionEffect:"parallax",controls:true,controlsThumb:false,responsive:1,fullScreen:false,gestures:2,onBeforeStep:0,images:[{src:"./1k0407183e.jpg",title:"1K0407183E",descr:"BUCHA BAND.DIANT. POLO\n/ FOX TRASEIRA"},{src:"./0045.jpg",title:"0045",descr:"BUCHA BARRA DIRECAO\nGOL/ SANTANA"},{src:"./20579.jpg",title:"20579",descr:"BUCHA PEDAL ACELERADOR\nGOL TODOS"},{src:"./101729.jpg",title:"101729",descr:"BUCHA BANDEJA DIANTEIRA\nGOL/PASSAT 84/95"},{src:"./857407181a.jpg",title:"857407181A",descr:"BUCHA BAND.DIANT. GOL /\nSANTANA 90/..."},{src:"./sk124.jpg",title:"SK124",descr:"BUCHA BARRA\nESTABILIZADORA UNO"},{src:"./sk464.jpg",title:"SK464",descr:"BUCHA BARRA DIRECAO GOL\n/ SANTANA",href:"http://wowslider.com"},{src:"./sk401.jpg",title:"SK401",descr:"BUCHA BANDEJA DIANTEIRA\nGOL/PASSAT 84/95"}]});