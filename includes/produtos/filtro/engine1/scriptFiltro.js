function ws_basic_linear(j,g,a){var c=jQuery;var f=c(this);var e=a.find(".ws_list");var i=c("<div>").addClass("ws_effect ws_basic_linear").css({position:"absolute",top:0,left:0,width:"100%",height:"100%",overflow:"hidden"}).appendTo(a);var b=c("<div>").css({position:"absolute",display:"none","z-index":2,width:"200%",height:"100%",transform:"translate3d(0,0,0)"}).appendTo(i);var h=c("<div>").css({position:"absolute",left:"auto",top:"auto",width:"50%",height:"100%",overflow:"hidden"}),d=h.clone();b.append(h,d);this.go=function(k,n,m){b.stop(1,1);if(m==undefined){m=(!!((k-n+1)%g.length)^j.revers?"left":"right")}else{m=m?"left":"right"}var o=c(g[n]);var l={width:o.width()||j.width,height:o.height()||j.height};o.clone().css(l).appendTo(h).css(m,0);c(g[k]).clone().css(l).appendTo(d).show();if(m=="right"){h.css("left","50%");d.css("left",0)}else{h.css("left",0);d.css("left","50%")}var q={},p={};q[m]=0;p[m]=-a.width();if(j.support.transform){if(m=="right"){q.left=q.right;p.left=-p.right}q={translate:[q.left,0,0]};p={translate:[p.left,0,0]}}e.hide();wowAnimate(b.css({left:"auto",right:"auto",top:0}).css(m,0).show(),q,p,j.duration,"easeInOutExpo",function(){f.trigger("effectEnd");b.hide().find("div").html("")})}};// -----------------------------------------------------------------------------------

jQuery("#wowslider-container1Filtro").wowSlider({effect:"basic_linear",prev:"",next:"",duration:20*100,delay:20*100,width:600,height:400,autoPlay:true,autoPlayVideo:false,playPause:false,stopOnHover:true,loop:false,bullets:0,caption:true,captionEffect:"parallax",controls:true,controlsThumb:false,responsive:1,fullScreen:false,gestures:2,onBeforeStep:0,images:[{src:"./lx3784.jpg",title:"LX3784",descr:"FILTRO AR PASSAT /\nJETTA FLEX 10/..."},{src:"./akx35346.jpg",title:"AKX35346",descr:"FILTRO ANTI-POLEN\nFIESTA HATCH / SEDAN"},{src:"./la117.jpg",title:"LA117",descr:"FILTRO ANTI-POLEN CORSA\n02/..."},{src:"./la646.jpg",title:"LA646",descr:"FILTRO ANTI-POLENFILTRO ANTI-POLEN\nCAPTIVA 08/..."},{src:"./la1003.jpg",title:"LA1003",descr:"FILTRO ANTI-POLEN L200\nTRITON V6 07/..."},{src:"./lx55.jpg",title:"LX55",descr:"FILTRO AR UNO/ PREMIO/\nELBA .../91"},{src:"./lx157.jpg",title:"LX157",descr:"FILTRO AR 147 / UNO\nMILLE CARBURADO"},{src:"./lx1597.jpg",title:"LX1597",descr:"FILTRO AR FIESTA 02/...\nNACIONAL"},{src:"./lx2124.jpg",title:"LX2124",descr:"FILTRO AR RANGER 3.0\nELETRONIC 05/..."},{src:"./lx2526.jpg",title:"LX2526",descr:"FILTRO AR DOBLO 02/...\nTODOS"},{src:"./lx3355.jpg",title:"LX3355",descr:"FILTRO AR PALIO / SIENA\n/ STRADA 10/..."},{src:"./kc120.jpg",title:"KC120",descr:"FILTRO COMBUSTIVEL VW\nCAMINHOES SERIE 20"},{src:"./kx43.jpg",title:"KX43",descr:"FILTRO COMBUSTIVEL\nDIESEL 1/2 LITRO"},{src:"./kx49.jpg",title:"KX49",descr:"FILTRO COMBUSTIVEL\nMERCEDES DIESEL 90/.."},{src:"./oc275.jpg",title:"OC275",descr:"FILTRO OLEO HILUX /\nLANDCRUISER DIESEL"},{src:"./ox175d.jpg",title:"OX175D",descr:"FILTRO OLEO PALIO 1.6\n16V FLEX 10/..."},{src:"./ox351d.jpg",title:"OX351D",descr:"FILTRO OLEO AZERA /\nVERA CRUZ"},{src:"./sec0611.jpg",title:"SEC0611",descr:"FILTRO COMBUSTIVEL 6/8\n- 6/8 GAS/ALC"},{src:"./fcd0785.jpg",title:"FCD0785",descr:"FILTRO COMBUSTIVEL\nRANGER 2.2 16V 12/..."},{src:"./fcd2064.jpg",title:"FCD2064",descr:"FILTRO COMB. BLAZER /\nS10 / FRONTIER"},{src:"./fcd20661.jpg",title:"FCD2066/1",descr:"FILTRO COMB. FRONTIER /\nS10 2.8 06/..."},{src:"./fcg001.jpg",title:"FCG001",descr:"FILTRO COMBUSTIVEL\nSIENA 1.4 8V 12/..."},{src:"./fci1303.jpg",title:"FCI1303",descr:"FILTRO COMBUSTIVEL\nJETTA 2.0 8V 10/..."},{src:"./fci1699.jpg",title:"FCI1699",descr:"FILTRO COMBUSTIVEL\nRANGER 2.5 16V 12/...",href:"http://wowslider.net"},{src:"./jfch26.jpg",title:"JFCH26",descr:"FILTRO COMB. ELANTRA /\nSONATA / VELOSTER"}]});