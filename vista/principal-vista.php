<!DOCTYPE html>
<html lang="en">



<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Catalogo - Productos</title>

	<link rel="stylesheet" href="css/estilos.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">

	<script src="js/jquery-3.2.1.js"></script>
	<script src="js/script.js"></script>
</head>
<?php include_once(VISTA . "head.php") ?>
<body>
	
	<div class="wrap">
		<h1>Escoge un producto</h1>
		<div class="store-wrapper">
			<div class="category_list">
				<a href="#" class="category_item" category="all">Todo</a>
				<a href="#" class="category_item" category="ordenadores">Ordenadores</a>
				<a href="#" class="category_item" category="laptops">Laptops</a>
				<a href="#" class="category_item" category="smartphones">Smartphones</a>
				<a href="#" class="category_item" category="monitores">Monitores</a>
				<a href="#" class="category_item" category="audifonos">Audifonos</a>
			</div>
			<section class="products-list">
				<div class="product-item" category="laptops">
					<img src="vista/imagenes/laptop_hp.jpg" alt="" >
					<a href="#">Laptop Hp</a>
					<p>DESCRIPCION 1</p>
					<P>ADASDASDASASD 2</P>
					<P>ADASDASDASASD 3</P>
					<P>ADASDASDASASD 4</P>
				</div>
				<div class="product-item" category="laptops">
					<img src="vista/imagenes/laptop_toshiba.jpg" alt="" >
					<a href="#">Laptop Toshiba</a>
					<p>DESCRIPCION 1</p>
					<P>ADASDASDASASD 2</P>
					<P>ADASDASDASASD 3</P>
					<P>ADASDASDASASD 4</P>
				</div>
				<div class="product-item" category="smartphones">
					<img src="vista/imagenes/samsung_galaxy.jpg" alt="" >
					<a href="#">Samsung Galaxy</a>
					<p>DESCRIPCION 1</p>
					<P>ADASDASDASASD 2</P>
					<P>ADASDASDASASD 3</P>
					<P>ADASDASDASASD 4</P>
				</div>
				<div class="product-item" category="smartphones">
					<img src="vista/imagenes/iphone.jpg" alt="" >
					<a href="#">Iphone 7</a>
					<p>DESCRIPCION 1</p>
					<P>ADASDASDASASD 2</P>
					<P>ADASDASDASASD 3</P>
					<P>ADASDASDASASD 4</P>
				</div>
				<div class="product-item" category="ordenadores">
					<img src="vista/imagenes/pc_hp.jpg" alt="" >
					<a href="#">PC Hp</a>
					<p>DESCRIPCION 1</p>
					<P>ADASDASDASASD 2</P>
					<P>ADASDASDASASD 3</P>
					<P>ADASDASDASASD 4</P>
				</div>
				<div class="product-item" category="ordenadores">
					<img src="vista/imagenes/pc_lenovo.jpg" alt="" >
					<a href="#">PC Lenovo</a>
					<p>DESCRIPCION 1</p>
					<P>ADASDASDASASD 2</P>
					<P>ADASDASDASASD 3</P>
					<P>ADASDASDASASD 4</P>
				</div>
				<div class="product-item" category="monitores">
					<img src="vista/imagenes/monitor_asus.jpg" alt="" >
					<a href="#">Monitor Asus</a>
					<p>DESCRIPCION 1</p>
					<P>ADASDASDASASD 2</P>
					<P>ADASDASDASASD 3</P>
					<P>ADASDASDASASD 4</P>
				</div>
				<div class="product-item" category="audifonos">
					<img src="vista/imagenes/jbl.jpg" alt="" >
					<a href="#">Audifonos JBL</a>
					<p>DESCRIPCION 1</p>
					<P>ADASDASDASASD 2</P>
					<P>ADASDASDASASD 3</P>
					<P>ADASDASDASASD 4</P>
				</div>
			</section>
		</div>
	</div>

<?php include_once(VISTA . "footer.php") ?>
</body>
</html>