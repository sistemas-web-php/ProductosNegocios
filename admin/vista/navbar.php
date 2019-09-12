<style>
header {
	width:100%;
}
 
header nav {
	width:100%;
	background:#024959;
}
 
.menu_bar {
	display:none;
}
 
header nav ul {
	overflow:hidden;
	list-style:none;
}
 
header nav ul li {
	float:left;
}
 
header nav ul li a {
	color:#fff;
	padding:20px;
	display:block;
	text-decoration:none;
}
 
header nav ul li span {
	margin-right:10px;
}
 
header nav ul li a:hover {
	background:#037E8C;
}
 
section {
	padding:20px;
}
 
@media screen and (max-width:800px ) {
	header nav {
		width:80%;
		height:100%;
		left:-100%;
		margin:0;
		position: fixed;
	}
 
	header nav ul li {
		display:block;
		float:none;
		border-bottom:1px solid rgba(255,255,255, .3);
	}
 
	.menu_bar {
		display:block;
		width:100%;
		background:#ccc;
	}
 
	.menu_bar .bt-menu {
		display:block;
		padding:20px;
		background:#024959;
		color:#fff;
		text-decoration:none;
		font-weight: bold;
		font-size:25px;
		-webkit-box-sizing:border-box;
		-moz-box-sizing:border-box;
		box-sizing:border-box;
	}
 
	.menu_bar span {
		float:right;
		font-size:40px;
	}
}
</style>
	<header>
		<div class="menu_bar">
			<a href="#" class="bt-menu"><span class="icon-list2"></span>Menu</a>
		</div>
 
		<nav>
			<ul>
				<li><a href="#"><span class="icon-house"></span>Inicio</a></li>
				<li><a href="#"><span class="icon-suitcase"></span>Trabajos</a></li>
				<li><a href="#"><span class="icon-rocket"></span>Proyectos</a></li>
				<li><a href="#"><span class="icon-earth"></span>Servicios</a></li>
				<li><a href="#"><span class="icon-mail"></span>Contactos</a></li>
			</ul>
		</nav>
	</header>

<script>
$(document).ready(main);
 
 var contador = 1;
  
 function main(){
   $('.menu_bar').click(function(){
     // $('nav').toggle(); 
  
     if(contador == 1){
       $('nav').animate({
         left: '0'
       });
       contador = 0;
     } else {
       contador = 1;
       $('nav').animate({
         left: '-100%'
       });
     }
  
   });
  
 };
</script>