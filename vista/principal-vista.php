<!DOCTYPE html>
<html lang="en">

<?php include_once(VISTA . "head.php") ?>
<body>

<?php include_once(VISTA . 'menu-superior.php'); ?>

<?php include_once(VISTA . 'menu-secundario.php'); ?>


    <section>
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner" id='slide-fotos'>
                <div class="carousel-item active">
                    <img src="https://i.ytimg.com/vi/Fvt90Z6wgYU/maxresdefault.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                <img src="https://as.com/betech/imagenes/2017/08/15/portada/1502783079_208324_1502783171_noticia_normal.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                <img src="https://tecnobits.xyz/wp-content/uploads/2018/04/Como-armar-una-PC-Gamer-en-2018.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
        </div>
    </section>

    <section id="show-prod" class="container">

        <div id="destacados">
            
        </div>

    </section>

<?php include_once(VISTA . "footer.php") ?>
</body>
</html>