
<div id="container" class="contForn"></div><!-- conteúdo -->
<!-- Efeitos fornecedores-->	
<script src="js/three.js"></script>
<script src="js/tween.min.js"></script>
<script src="js/TrackballControls.js"></script>
<script src="js/CSS3DRenderer.js"></script>

<div class="title text-center "  >
			<h2>Nossos <span class="color">Fornecedores</span></h2>
			<div class="border"></div>
</div>

<div id="menu"><br>
<a title="Zoom-Pressionar a roda do mouse e mover para cima ou para baixo">MODOS DE EXIBIÇÃO 3D</a><br>
	<button id="table">TABELA</button>
	<button id="sphere">ESFERA</button>
	<button id="helix">CUBO</button>
	<button id="grid">GRADE</button>
	
			
</div>

		<script>


			var table = [

				"Castrol_logo.png",				  
				   "http://www.castrol.com/pt_br/brazil.html","", 1, 1,
				"dayco.png",				
				  "http://www.daycoaftermarket.com/BR/PT/","", 2, 1,
				"seineca.png",				
				  "http://www.seineca.com/br/","", 3, 1,				
				"bortec.png",
				  "http://www.bortec.com.br/","", 4, 1,
				"Perfect.png",
				  "http://perfectbrasil.com.br/novo/","",5, 1,
				"motorcraft.png",
				  "http://www.motorcraft.com/pt","", 6, 1,
				"trw.png", 
				  "http://www.trw.com.br/","",7, 1,
				"grand_prix.png",
				   "img/logos/fornec/grand_prix.png","", 8, 1,	  
				"vox.png",
				   "http://www.filtrosvox.com.br/","", 9, 1,
				"rolt.png",
				  "http://www.roltdobrasil.com.br/","",  10, 1,		
				 "allen-shocks.png",
				   "img/logos/fornec/allen-shocks.png","",  11, 1, 
				 "radnaq.png",
				  "http://www.radnaq.com.br/","", 12, 1,
				 "wega.png",
				  "http://www.wegamotors.com/","", 13, 1,
				 "tigre.png",
				  "http://molastigredobrasil.com.br/riodejaneiro/","", 14, 1, 
				"auto_impact.png",
				  "http://autoimpact.com.br/" ,"",  15, 1,


				"ngk.png",
				  "http://www.ngkntk.com.br/","",  1, 2,  
				"mds.png",
				  "http://www.mds.ind.br/","",  2, 2,
				"unick.png",
				  "img/logos/fornec/unick.png","",  3, 2,
				"fortec.png",
				  "http://www.fortecfreios.com.br/","",  4, 2,
				"vober.png",
				  "http://www.vober.com.br/novosite/","",  5, 2,	
				"sabo.png",
				  "http://www.sabo.com.br/","",  6, 2,
				"3B-RIO.png",
				  "http://www.3brio.com.br/index_portugues.php","",  7, 2,
				"acdelco.png",
				  "http://acdelcobrasil.com.br/","",  8, 2,	
				"street.png",
				  "img/logos/fornec/street.png","",  9,2,			
				"wisa.png",
				  "http://www.wisa.ind.br/novosite/index.php","",  10, 2,
				"luciflex.png",
				  "http://www.luciflex.com.br/","",  11, 2,
				"maxi.png",
				  "http://www.maxiautomotive.com.br/","",  12, 2,
				"orbi.png",
				  "http://orbiquimica.com.br/","",  13, 2,
				"pinheiro.png",
				  "img/logos/fornec/pinheiro.png","",  14, 2,
				"tecbril.png",
				  "http://www.tecbril.com.br/","",  15, 2,


				"metal_matrix.png",
				  "http://www.metalmatrix.com.br/","", 1, 3,  
				"skf.png",
				  "http://www.skf.com/br/our-company/skf-brasil/index.html","",  2, 3,
				"tabuleiro.png",
				  "http://www.molastabuleiro.com.br/home.html","",  3, 3,
				"taranto.png",
				  "http://www.taranto.com.br/","",  4, 3,
				"sinter.png",
				  "http://www.sinterfreios.com.br/","",  5, 3,
				"metalleve.png",
				  "http://www.br.mahle.com/pt/","",  6, 3,
				"varga.png",
				  "img/logos/fornec/varga.png","",  7, 3,
				"gonel.png",
				  "img/logos/fornec/gonel.png","",  8, 3,
				"radiex.png",
				  "http://www.radiex.com.br/","",  9, 3,				
				"finder.png",
				  "http://www.finder.ind.br/","",  10, 3,
				"bardahl.png",
				  "http://www.bardahl.com.br/site/index.php","",  11, 3,
				"euro.png",
				  "img/logos/fornec/euro.png","",  12, 3,
				"columbia.png",
				  "http://columbiaautoparts.com.br/" ,"",  13, 3,
				"spare-kits.png",
				  "http://sparekits.com.br/web/home/","",  14, 3,
				"magneti.png",
				  "http://www.magnetimarelli.com/pt/node/5004","",  15, 3,


				"mecar.png",
				  "http://www.mecar.ind.br/","",  1, 4,
				"gauss.png",
				  "http://www.gauss.ind.br/","",  2, 4,
				"manluplast.png",
				  "http://manluplast.com.br/","",  3, 4,
				"mt.png",
				  "http://www.mangueirastecnicas.com.br/","",  4, 4,
				"trali.png",
				  "http://www.trali.com.br/","",  5, 4,
				"mega_auto_parts.png",
				  "http://en.megaauto.com.mk/" ,"",  6, 4,
				"cobreq.png",
				  "http://www.cobreq.com.br/site/","",  7, 4,
				"frontec.png",
				  "http://www.frontec.com.br/" ,"",  8, 4,
				"bosch.png", 
				  "http://www.brasil.bosch.com.br/pt/br/br_main/startpage_1/country-landingpage.php","", 9, 4,
				 "kictech.png",
				  "http://www.kictech.com.br","",  10, 4, 
				   "abro.png",
				  "http://www.abro.com","",  11, 4, 
				/*"","","",  2, 6
				"La", "", "", 4, 9,
				"Ce", "", "", 5, 9,
				"Pr", "", "", 6, 9,
				"Nd", "", "", 7, 9,
				"Pm", "", "", 8, 9,
				"Sm", "", "", 9, 9,
				"Eu", "", "", 10, 9,
				"Gd", "", "", 11, 9,
				"Tb", "", "", 12, 9,
				"Dy", "", "", 13, 9,
				"Ho", "", "", 14, 9,
				"Er", "", "", 15, 9,
				"Tm", "", "", 16, 9,
				"Yb", "", "", 17, 9,
				"Lu", "", "", 18, 9,
				"Hf", "", "", 4, 6,
				"Ta", "", "", 5, 6,
				"W", "", "", 6, 6,
				"Re", "", "", 7, 6,
				"Os", "", "", 8, 6,
				"Ir", "", "", 9, 6,
				"Pt", "", "", 10, 6,
				"Au", "", "", 11, 6,
				*/
			];
		

			var camera, scene, renderer;
			var controls;

			var objects = [];
			var targets = { table: [], sphere: [], helix: [], grid: [] };

			init();
			animate();

			function init() {

				camera = new THREE.PerspectiveCamera( 40, window.innerWidth / window.innerHeight, 1, 10000 );
				camera.position.z = 3000;

				scene = new THREE.Scene();

				// table

				for ( var i = 0; i < table.length; i += 5 ) {

					var element = document.createElement( 'div' );
					element.className = 'element';
					var imgF = document.createElement('img');
					imgF.src = 'img/logos/fornec/'+table[i]+'';					
					imgF.className='imgForn';
					/*element.setAttribute("id",i);	
					var d =document.getElementById(i);		
					alert(table[d]);*/
					var lk=document.createElement('a');//adiciona <a
					lk.href=table[i+1];
					lk.target="_blank";
					

					element.appendChild(lk);
					lk.appendChild(imgF);
  					
					/*
					var symbol = document.createElement( 'div' );
					symbol.className = 'symbol';
					symbol.textContent = table[ i ];
					element.appendChild( symbol );
					-----------------------------------	
					var details = document.createElement( 'div' );
					details.className = 'details';
					details.innerHTML = table[ i + 1 ] + '<br>' + table[ i + 2 ];
					element.appendChild( details );*/

					var object = new THREE.CSS3DObject( element );
					object.position.x = Math.random() * 4000 - 2000;
					object.position.y = Math.random() * 4000 - 2000;
					object.position.z = Math.random() * 4000 - 2000;
					scene.add( object );

					objects.push( object );

					//

					var object = new THREE.Object3D();
					object.position.x = ( table[ i + 3 ] * 140 ) - 1330;
					object.position.y = - ( table[ i + 4 ] * 180 ) + 990;

					targets.table.push( object );

				}
				
				// sphere

				var vector = new THREE.Vector3();

				for ( var i = 0, l = objects.length; i < l; i ++ ) {

					var phi = Math.acos( -1 + ( 2 * i ) / l );
					var theta = Math.sqrt( l * Math.PI ) * phi;

					var object = new THREE.Object3D();

					object.position.x = 800 * Math.cos( theta ) * Math.sin( phi );
					object.position.y = 800 * Math.sin( theta ) * Math.sin( phi );
					object.position.z = 800 * Math.cos( phi );

					vector.copy( object.position ).multiplyScalar( 2 );

					object.lookAt( vector );

					targets.sphere.push( object );

				}

				// helix

				var vector = new THREE.Vector3();

				for ( var i = 0, l = objects.length; i < l; i ++ ) {

					var phi = i * 0.175 + Math.PI;

					var object = new THREE.Object3D();

					object.position.x = 900 * Math.sin( phi );
					object.position.y = - ( i * 8 ) + 450;
					object.position.z = 900 * Math.cos( phi );

					vector.x = object.position.x * 2;
					vector.y = object.position.y;
					vector.z = object.position.z * 2;

					object.lookAt( vector );

					targets.helix.push( object );

				}


				// grid

				for ( var i = 0; i < objects.length; i ++ ) {

					var object = new THREE.Object3D();

					object.position.x = ( ( i % 5 ) * 400 ) - 800;
					object.position.y = ( - ( Math.floor( i / 5 ) % 5 ) * 400 ) + 800;
					object.position.z = ( Math.floor( i / 25 ) ) * 1000 - 2000;

					targets.grid.push( object );

				}
				

				/*
				for(x=0;x<=table.length;x++)
				{
					alert(x+"-"+table[x]);
				}*/
				renderer = new THREE.CSS3DRenderer();
				renderer.setSize( window.innerWidth, window.innerHeight );
				renderer.domElement.style.position = 'absolute';
				document.getElementById( 'container' ).appendChild( renderer.domElement );

				//

				controls = new THREE.TrackballControls( camera, renderer.domElement );
				controls.rotateSpeed = 0.5;
				controls.minDistance = 500;
				controls.maxDistance = 6000;
				controls.addEventListener( 'change', render );
				
				var button = document.getElementById( 'table' );
				button.addEventListener( 'click', function ( event ) {

					transform( targets.table, 2000 );

				}, false );
				
				var button = document.getElementById( 'sphere' );
				button.addEventListener( 'click', function ( event ) {

					transform( targets.sphere, 2000 );

				}, false );

				var button = document.getElementById( 'helix' );
				button.addEventListener( 'click', function ( event ) {

					transform( targets.helix, 2000 );

				}, false );

				var button = document.getElementById( 'grid' );
				button.addEventListener( 'click', function ( event ) {

					transform( targets.grid, 2000 );

				}, false );

				transform( targets.table, 2000 );

				//

				//window.addEventListener( 'resize', onWindowResize, false );

			}

			function transform( targets, duration ) {

				TWEEN.removeAll();

				for ( var i = 0; i < objects.length; i ++ ) {

					var object = objects[ i ];
					var target = targets[ i ];

					new TWEEN.Tween( object.position )
						.to( { x: target.position.x, y: target.position.y, z: target.position.z }, Math.random() * duration + duration )
						.easing( TWEEN.Easing.Exponential.InOut )
						.start();

					new TWEEN.Tween( object.rotation )
						.to( { x: target.rotation.x, y: target.rotation.y, z: target.rotation.z }, Math.random() * duration + duration )
						.easing( TWEEN.Easing.Exponential.InOut )
						.start();

				}

				new TWEEN.Tween( this )
					.to( {}, duration * 2 )
					.onUpdate( render )
					.start();

			}
/*
			function onWindowResize() {
				camera.aspect = window.innerWidth / window.innerHeight;
				camera.updateProjectionMatrix();
				renderer.setSize( window.innerWidth, window.innerHeight );
				render();
			}
*/
			function animate() {

				requestAnimationFrame( animate );

				TWEEN.update();

				controls.update();

			}

			function render() {

				renderer.render( scene, camera );

			}		
	transform( targets.sphere, 2000 );/*iniciar sphere primeiro*/
	</script>



</div>