
function ws_basic_linear(j,g,a){var c=jQuery;var f=c(this);var e=a.find(".ws_list");var i=c("<div>").addClass("ws_effect ws_basic_linear").css({position:"absolute",top:0,left:0,width:"100%",height:"100%",overflow:"hidden"}).appendTo(a);var b=c("<div>").css({position:"absolute",display:"none","z-index":2,width:"200%",height:"100%",transform:"translate3d(0,0,0)"}).appendTo(i);var h=c("<div>").css({position:"absolute",left:"auto",top:"auto",width:"50%",height:"100%",overflow:"hidden"}),d=h.clone();b.append(h,d);this.go=function(k,n,m){b.stop(1,1);if(m==undefined){m=(!!((k-n+1)%g.length)^j.revers?"left":"right")}else{m=m?"left":"right"}var o=c(g[n]);var l={width:o.width()||j.width,height:o.height()||j.height};o.clone().css(l).appendTo(h).css(m,0);c(g[k]).clone().css(l).appendTo(d).show();if(m=="right"){h.css("left","50%");d.css("left",0)}else{h.css("left",0);d.css("left","50%")}var q={},p={};q[m]=0;p[m]=-a.width();if(j.support.transform){if(m=="right"){q.left=q.right;p.left=-p.right}q={translate:[q.left,0,0]};p={translate:[p.left,0,0]}}e.hide();wowAnimate(b.css({left:"auto",right:"auto",top:0}).css(m,0).show(),q,p,j.duration,"easeInOutExpo",function(){f.trigger("effectEnd");b.hide().find("div").html("")})}};// -----------------------------------------------------------------------------------

jQuery("#wowslider-containerAmort").wowSlider({effect:"basic_linear",prev:"",next:"",duration:20*100,delay:20*100,width:600,height:400,autoPlay:true,autoPlayVideo:false,playPause:false,stopOnHover:true,loop:false,bullets:0,caption:true,captionEffect:"parallax",controls:true,controlsThumb:false,responsive:1,fullScreen:false,gestures:2,onBeforeStep:0,images:[{src:"./34047.jpg",title:"34047",descr:"AMORTECEDOR DIANT.\nESCORT/VERONA\n",target:"_self"},{src:"./34383g.jpg",title:"34383G",descr:"AMORTECEDOR DIANT.\nFIESTA 03/..."},{src:"./34546g.jpg",title:"34546G",descr:"AMORTECEDOR DIANT.\nCORSA 02/... LD"},{src:"./34668.jpg",title:"34668",descr:"AMORTECEDOR TRAS. UNO\nWAY 08/...LD/LE"},{src:"./35864g.jpg",title:"35864G",descr:"AMORTECEDOR DIANT.\nPUNTO / LINEA LE"},{src:"./42298g.jpg",title:"42298G",descr:"AMORTECEDOR TRAS.\nPALIO/SIENA LD/LE"},{src:"./42446g.jpg",title:"42446G",descr:"AMORTECEDOR TRAS. IDEA\n/ PUNTO / LINEA"},{src:"./amd11523.jpg",title:"AMD11523",descr:"AMORTECEDOR DIANT.\nDOBLO ADV. 2003...",href:"http://wowslider.com/vi"},{src:"./amd69123.jpg",title:"AMD69123",descr:"AMORTECEDOR DIANT.\nFIORINO TREKKING 96/."}]});