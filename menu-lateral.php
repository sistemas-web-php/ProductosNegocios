<div class="contenedor-menu">
		<a href="#" class="btn-menu">Menu<i class="icono fa fa-bars"></i></a>

		<ul class="menu">
			<li><a href="#"><i class="icono izquierda fa fa-home"></i>Inicio</a></li>
			<li><a href="#"><i class="icono izquierda fa fa-star"></i>Productos<i class="icono derecha fa fa-chevron-down"></i></a>
				<ul>
					<li><a href="http://www.falconmasters.com">Item 1</a></li>
					<li><a href="https://www.google.com">Item 2</a></li>
					<li><a href="http://www.tutorialdephp.com">Item 3</a></li>
					<li><a href="http://www.falconmasters.com">Item 4</a></li>
				</ul>
			</li>
			<li><a href="#"><i class="icono izquierda fa fa-share-alt"></i>Redes Sociales<i class="icono derecha fa fa-chevron-down"></i></a>
				<ul>
					<li><a href="#">Item 1</a></li>
					<li><a href="#">Item 2</a></li>
					<li><a href="#">Item 3</a></li>
					<li><a href="#">Item 4</a></li>
				</ul>
			</li>
			<li><a href="#"><i class="icono izquierda fa fa-envelope"></i>Contactanos</a></li>
		</ul>
  </div>
  

  <script>
    $(document).ready(function(){
	$('.menu li:has(ul)').click(function(e){
		e.preventDefault();

		if ($(this).hasClass('activado')){
			$(this).removeClass('activado');
			$(this).children('ul').slideUp();
		} else {
			$('.menu li ul').slideUp();
			$('.menu li').removeClass('activado');
			$(this).addClass('activado');
			$(this).children('ul').slideDown();
		}
	});

	$('.btn-menu').click(function(){
		$('.contenedor-menu .menu').slideToggle();
	});

	$(window).resize(function(){
		if ($(document).width() > 450){
			$('.contenedor-menu .menu').css({'display' : 'block'});
		}

		if ($(document).width() < 450){
			$('.contenedor-menu .menu').css({'display' : 'none'});
			$('.menu li ul').slideUp();
			$('.menu li').removeClass('activado');
		}
	});

	$('.menu li ul li a').click(function(){
		window.location.href = $(this).attr("href");
	});
});
  </script>