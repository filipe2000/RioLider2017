
function ws_basic_linear(j,g,a){var c=jQuery;var f=c(this);var e=a.find(".ws_list");var i=c("<div>").addClass("ws_effect ws_basic_linear").css({position:"absolute",top:0,left:0,width:"100%",height:"100%",overflow:"hidden"}).appendTo(a);var b=c("<div>").css({position:"absolute",display:"none","z-index":2,width:"200%",height:"100%",transform:"translate3d(0,0,0)"}).appendTo(i);var h=c("<div>").css({position:"absolute",left:"auto",top:"auto",width:"50%",height:"100%",overflow:"hidden"}),d=h.clone();b.append(h,d);this.go=function(k,n,m){b.stop(1,1);if(m==undefined){m=(!!((k-n+1)%g.length)^j.revers?"left":"right")}else{m=m?"left":"right"}var o=c(g[n]);var l={width:o.width()||j.width,height:o.height()||j.height};o.clone().css(l).appendTo(h).css(m,0);c(g[k]).clone().css(l).appendTo(d).show();if(m=="right"){h.css("left","50%");d.css("left",0)}else{h.css("left",0);d.css("left","50%")}var q={},p={};q[m]=0;p[m]=-a.width();if(j.support.transform){if(m=="right"){q.left=q.right;p.left=-p.right}q={translate:[q.left,0,0]};p={translate:[p.left,0,0]}}e.hide();wowAnimate(b.css({left:"auto",right:"auto",top:0}).css(m,0).show(),q,p,j.duration,"easeInOutExpo",function(){f.trigger("effectEnd");b.hide().find("div").html("")})}};// -----------------------------------------------------------------------------------

jQuery("#wowslider-containerBie").wowSlider({effect:"basic_linear",prev:"",next:"",duration:20*100,delay:20*100,width:600,height:400,autoPlay:true,autoPlayVideo:false,playPause:false,stopOnHover:true,loop:false,bullets:0,caption:true,captionEffect:"parallax",controls:true,controlsThumb:false,responsive:1,fullScreen:false,gestures:2,onBeforeStep:0,images:[{src:"./kbt50088.jpg",title:"KBT50088",descr:"BIELETA DIANT. L200\n08/13 LD"},{src:"./kbt0101.jpg",title:"KBT0101",descr:"BIELETA DIANT. IDEA\nADVENTURE 1.8 07/..."},{src:"./kbt0300.jpg",title:"KBT0300",descr:"BIELETA DIANT. C3"},{src:"./kbt0311.jpg",title:"KBT0311",descr:"BIELETA DIANT. ASTRA /\nZAFIRA"},{src:"./kbt0314.jpg",title:"KBT0314",descr:"BIELETA DIANT. COBALT /\nONIX 11/..."},{src:"./kbt0316.jpg",title:"KBT0316",descr:"BIELETA DIANT. CRUZE\n11/... LD/LE"},{src:"./kbt0402.jpg",title:"KBT0402",descr:"BIELETA DIANT. CIVIC\n01/... LD"},{src:"./kbt0607.jpg",title:"KBT0607",descr:"BIELETA DIANT. DUSTER\n11/... LD/LE"},{src:"./kbt4045.jpg",title:"KBT4045",descr:"BIELETA DIANT. CORSA\n02/12 LD/LE",href:"http://wowslider.net"},{src:"./kbt4067.jpg",title:"KBT4067",descr:"BIELETA DIANT. FOX /\nPOLO"}]});