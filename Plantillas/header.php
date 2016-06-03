<header>
    <nav class="navbar navbar-default navbar-primary navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-1">
                    <span class="sr-only">Desplegar / Ocultar Menú</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="<?php echo url::getRaiz()?>/index.php" class="navbar-brand logo"><img src="<?php echo url::getRaiz()?>/img/logo.png" alt="ColorssPalette" class="img-responsive imgLogo"></a>
            </div>
            <!--Inicia menú-->
            <div class="collapse navbar-collapse" id="navbar-1">
                <ul class="nav navbar-nav">
                    <li <?php if(basename($_SERVER['PHP_SELF'])=="index.php"){echo 'class="active"';}?>><a href="<?php echo url::getRaiz()?>/index.php">Inicio</a></li>
                    <li <?php if(basename($_SERVER['PHP_SELF'])=="servicios.php"){echo 'class="active"';}?>><a href="<?php echo url::getRaiz()?>/servicios.php">Servicios</a></li>
                    <li <?php if(basename($_SERVER['PHP_SELF'])=="contacto.php"){echo 'class="active"';}?>><a href="<?php echo url::getRaiz()?>/contacto.php">Contacto</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <section class="jumbotron">
        <?php
            if(basename($_SERVER['PHP_SELF'])=="index.php"){
                echo '<div class="container text-center"><img src="'.url::getRaiz().'/img/logo.png" alt="logo" class="imgJBT"><p>Vitoria-Tecnologia</p></div>';
            }elseif(basename($_SERVER['PHP_SELF'])=="palette.php"){
                echo '<div class="container"><h1>Contacto</h1><p>Contactanos y pide nos presupuesto</p></div>';
            }
        ?>
    </section>
</header>