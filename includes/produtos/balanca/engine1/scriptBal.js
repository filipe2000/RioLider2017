
function ws_basic_linear(j,g,a){var c=jQuery;var f=c(this);var e=a.find(".ws_list");var i=c("<div>").addClass("ws_effect ws_basic_linear").css({position:"absolute",top:0,left:0,width:"100%",height:"100%",overflow:"hidden"}).appendTo(a);var b=c("<div>").css({position:"absolute",display:"none","z-index":2,width:"200%",height:"100%",transform:"translate3d(0,0,0)"}).appendTo(i);var h=c("<div>").css({position:"absolute",left:"auto",top:"auto",width:"50%",height:"100%",overflow:"hidden"}),d=h.clone();b.append(h,d);this.go=function(k,n,m){b.stop(1,1);if(m==undefined){m=(!!((k-n+1)%g.length)^j.revers?"left":"right")}else{m=m?"left":"right"}var o=c(g[n]);var l={width:o.width()||j.width,height:o.height()||j.height};o.clone().css(l).appendTo(h).css(m,0);c(g[k]).clone().css(l).appendTo(d).show();if(m=="right"){h.css("left","50%");d.css("left",0)}else{h.css("left",0);d.css("left","50%")}var q={},p={};q[m]=0;p[m]=-a.width();if(j.support.transform){if(m=="right"){q.left=q.right;p.left=-p.right}q={translate:[q.left,0,0]};p={translate:[p.left,0,0]}}e.hide();wowAnimate(b.css({left:"auto",right:"auto",top:0}).css(m,0).show(),q,p,j.duration,"easeInOutExpo",function(){f.trigger("effectEnd");b.hide().find("div").html("")})}};// -----------------------------------------------------------------------------------

jQuery("#wowslider-containerBal").wowSlider({effect:"basic_linear",prev:"",next:"",duration:20*100,delay:20*100,width:600,height:400,autoPlay:true,autoPlayVideo:false,playPause:false,stopOnHover:true,loop:false,bullets:0,caption:true,captionEffect:"parallax",controls:true,controlsThumb:false,responsive:1,fullScreen:false,gestures:2,onBeforeStep:0,images:[{src:"./bdj1011.jpg",title:"BDJ1011",descr:"BALANCA DIANT. KADETT\nGL/GLS 89/98 LD"},{src:"./bdj2016.jpg",title:"BDJ2016",descr:"BALANCA DIANT. ASTRA\n99/... / VECTRA"},{src:"./bdj2017.jpg",title:"BDJ2017",descr:"BALANCA DIANT. ASTRA\n99/... / VECTRA"},{src:"./bdj2022.jpg",title:"BDJ2022",descr:"BALANCA DIANT. CORSA\n02/... LD"},{src:"./bdj2036.jpg",title:"BDJ2036",descr:"BALANCA DIANT. CAPTIVA\n08/... LD"},{src:"./bdj2093.jpg",title:"BDJ2093",descr:"BALANCA INF. BLAZER /\nS10 4X2 95/... LE"},{src:"./bdj2094.jpg",title:"BDJ2094",descr:"BALANCA INF. BLAZER /\nS10 4X2 95/... LD"},{src:"./bdj3195.jpg",title:"BDJ3195",descr:"BALANCA SUP. FUSION\n06/... LE"},{src:"./bdj4100.jpg",title:"BDJ4100",descr:"BALANCA INF. CHEVETTE\n73/92 LE"},{src:"./bdj4102.jpg",title:"BDJ4102",descr:"BALANCA INF. CHEVETTE\n73/92 LD"},{src:"./bra2803.jpg",title:"BRA2803",descr:"BALANCA SUP. RANGER\n98/... LD",href:"http://wowslider.com"},{src:"./bra4118.jpg",title:"BRA4118",descr:"BALANÇA DIANT. CORSA\n98/... LD"}]});