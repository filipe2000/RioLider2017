
function ws_basic_linear(j,g,a){var c=jQuery;var f=c(this);var e=a.find(".ws_list");var i=c("<div>").addClass("ws_effect ws_basic_linear").css({position:"absolute",top:0,left:0,width:"100%",height:"100%",overflow:"hidden"}).appendTo(a);var b=c("<div>").css({position:"absolute",display:"none","z-index":2,width:"200%",height:"100%",transform:"translate3d(0,0,0)"}).appendTo(i);var h=c("<div>").css({position:"absolute",left:"auto",top:"auto",width:"50%",height:"100%",overflow:"hidden"}),d=h.clone();b.append(h,d);this.go=function(k,n,m){b.stop(1,1);if(m==undefined){m=(!!((k-n+1)%g.length)^j.revers?"left":"right")}else{m=m?"left":"right"}var o=c(g[n]);var l={width:o.width()||j.width,height:o.height()||j.height};o.clone().css(l).appendTo(h).css(m,0);c(g[k]).clone().css(l).appendTo(d).show();if(m=="right"){h.css("left","50%");d.css("left",0)}else{h.css("left",0);d.css("left","50%")}var q={},p={};q[m]=0;p[m]=-a.width();if(j.support.transform){if(m=="right"){q.left=q.right;p.left=-p.right}q={translate:[q.left,0,0]};p={translate:[p.left,0,0]}}e.hide();wowAnimate(b.css({left:"auto",right:"auto",top:0}).css(m,0).show(),q,p,j.duration,"easeInOutExpo",function(){f.trigger("effectEnd");b.hide().find("div").html("")})}};// -----------------------------------------------------------------------------------

jQuery("#wowslider-containerP").wowSlider({effect:"basic_linear",prev:"",next:"",duration:20*100,delay:20*100,width:600,height:400,autoPlay:true,autoPlayVideo:false,playPause:false,stopOnHover:true,loop:false,bullets:0,caption:true,captionEffect:"parallax",controls:true,controlsThumb:false,responsive:1,fullScreen:false,gestures:2,onBeforeStep:0,images:[{src:"./1562124.png",title:"1562124",descr:"CITY TECH II185 / 70R14 88T TL \n"},{src:"./1562142.png",title:"1562142",descr:"CITY TECH II185 / 65R15 88H TL \n"},{src:"./1562251.png",title:"1562251",descr:"CITY TECH II 185 / 65R15 88H "},{src:"./1562125.png",title:"1562125",descr:"CITY TECH II 185 / 65R14 86T TL "},{src:"./1562127.png",title:"1562127",descr:"CITY TECH II 185 / 60R 14 82H TL "},{src:"./1550348.png",title:"1550348",descr:"CITY TECH II 175 / 70R14 84T  VIK "},{src:"./1550232.png",title:"1550232",descr:"CITY TECH II 175 / 70R13 82T"},{src:"./1562053.png",title:"1562053",descr:"CITY TECH II 175 / 65R15 84T "},{src:"./1550238.png",title:"1550238",descr:"CITY TECH II 165 / 70R13 79T"},{src:"./1550342.png",title:"1550342",descr:"CITY TECH II 175 / 65R14 82T VIK "},{src:"./1562126.png",title:"1562126",descr:"CITY TECH II 195 / 65R15 91H TL "},{src:"./1562139.png",title:"1562139",descr:"PRO TECH II 205 / 55R16 91W TL "},{src:"./1562137.png",title:"1562137",descr:"PRO TECH II 195 / 60R15 88H TL "},{src:"./1562138.png",title:"1562138",descr:"PRO TECH II 195 / 55R15 85V TL "},{src:"./0452079.png",title:"0452079",descr:"TRANS TECH II 8P 195 / 70R15C 104 / 102R "},{src:"./0452064.png",title:"0452064",descr:"TRANS TECH II 8 PR 225 / 70R15C 112/110R "},{src:"./045207.png",title:"045207",descr:"TRANS TECH II 8PR 215 / 75R16C 113/ 111R "},{src:"./0452074.png",title:"0452074",descr:"TRANS TECH II 8PR 225 / 65R16C 112 /110R "},{src:"./0452075.png",title:"0452075",descr:"TRANS TECH II 8PR 205 / 75R16C 110 /108R ",href:"http://wowslider.com"},{src:"./04521.png",title:"04521",descr:"TRANS TECH II 185 R14C 102 / 100Q TL "}]});