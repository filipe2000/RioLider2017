
function ws_basic_linear(j,g,a){var c=jQuery;var f=c(this);var e=a.find(".ws_list");var i=c("<div>").addClass("ws_effect ws_basic_linear").css({position:"absolute",top:0,left:0,width:"100%",height:"100%",overflow:"hidden"}).appendTo(a);var b=c("<div>").css({position:"absolute",display:"none","z-index":2,width:"200%",height:"100%",transform:"translate3d(0,0,0)"}).appendTo(i);var h=c("<div>").css({position:"absolute",left:"auto",top:"auto",width:"50%",height:"100%",overflow:"hidden"}),d=h.clone();b.append(h,d);this.go=function(k,n,m){b.stop(1,1);if(m==undefined){m=(!!((k-n+1)%g.length)^j.revers?"left":"right")}else{m=m?"left":"right"}var o=c(g[n]);var l={width:o.width()||j.width,height:o.height()||j.height};o.clone().css(l).appendTo(h).css(m,0);c(g[k]).clone().css(l).appendTo(d).show();if(m=="right"){h.css("left","50%");d.css("left",0)}else{h.css("left",0);d.css("left","50%")}var q={},p={};q[m]=0;p[m]=-a.width();if(j.support.transform){if(m=="right"){q.left=q.right;p.left=-p.right}q={translate:[q.left,0,0]};p={translate:[p.left,0,0]}}e.hide();wowAnimate(b.css({left:"auto",right:"auto",top:0}).css(m,0).show(),q,p,j.duration,"easeInOutExpo",function(){f.trigger("effectEnd");b.hide().find("div").html("")})}};// -----------------------------------------------------------------------------------

jQuery("#wowslider-container1homoc").wowSlider({effect:"basic_linear",prev:"",next:"",duration:20*100,delay:20*100,width:600,height:400,autoPlay:true,autoPlayVideo:false,playPause:false,stopOnHover:true,loop:false,bullets:0,caption:true,captionEffect:"parallax",controls:true,controlsThumb:false,responsive:1,fullScreen:false,gestures:2,onBeforeStep:0,images:[{src:"./kjh6026.jpg",title:"KJH6026",descr:"HOMOCINETICA COMPLETA\nHILUX SRV 01/05"},{src:"./jhc0217.jpg",title:"JHC0217",descr:"HOMOCINETICA CAMBIO\nESCORT 1.6 S/ ABS"},{src:"./jhc0232.jpg",title:"JHC0232",descr:"HOMOCINETICA CAMBIO\nKOMBI 1.6 78/97"},{src:"./jhc0251.jpg",title:"JHC0251",descr:"HOMOCINETICA CAMBIO FOX\n/ GOL / VOYAGE"},{src:"./kjh0123.jpg",title:"KJH0123",descr:"HOMOCINETICA RODA PALIO\n/ PUNTO 1.6 11/."},{src:"./kjh0228.jpg",title:"KJH0228",descr:"HOMOCINETICA RODA PALIO\n/ SIENA 1.8 02/."},{src:"./kjh1040.jpg",title:"KJH1040",descr:"HOMOCINETICA RODA\nDUCATO 2.5 / 2.8 TDI A"},{src:"./kjh1401.jpg",title:"KJH1401",descr:"HOMOCINETICA COMPLETA\nGOL / PARATI LE"},{src:"./kjh1402.jpg",title:"KJH1402",descr:"HOMOCINETICA COMPLETA\nGOL / PARATI LD"},{src:"./kjh1616.jpg",title:"KJH1616",descr:"HOMOCINETICA RODA IDEA\n1.4 03/09",href:"http://wowslider.com"},{src:"./kjh5906.jpg",title:"KJH5906",descr:"HOMOCINETICA COMPLETA\nHILUX 3.0 06/..."}]});