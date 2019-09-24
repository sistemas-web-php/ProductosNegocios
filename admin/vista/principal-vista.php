<!DOCTYPE html>
<html lang="en">
<?php include_once(VISTA . "head.php") ?>

<body>

<div class="wrapper">
    <div class="sidebar">
        <h2>MENU</h2>
        <ul>
            <li><a href="#"><i class="fas fa-home"></i>INICIO</a></li>
            <li><a href="#" onclick='desplegar(this);'><i class="fas fa-user"></i>PERFIL</a>
            <ul>
                <li class="submenu">item 1</li>
                <li class="submenu">item 2</li>
                <li class="submenu">item 3</li>
              </ul>
          
          </li>
            <li><a href="#"><i class="fas fa-address-card"></i>ACERCA DE</a></li>
            <li><a href="#"><i class="fas fa-project-diagram"></i>PORTAFOLIO</a></li>
            <li><a href="#"><i class="fas fa-blog"></i>BLOGS</a></li>
            <li><a href="#"><i class="fas fa-address-book"></i>CONTACTO</a></li>
            <li><a href="#" onclick='desplegar();'><i class="fas fa-map-pin"></i>MAPS</a>
          
              <ul>
                <li class="submenu">item 1</li>
                <li class="submenu">item 2</li>
                <li class="submenu">item 3</li>
              </ul>
          
          </li>
            <li><a href="#"><i class="fas fa-project-diagram"></i>PORTAFOLIO</a></li>
        </ul> 

    </div>
    
</div>

<?php include_once(VISTA . "footer.php") ?>

</body>


</html>