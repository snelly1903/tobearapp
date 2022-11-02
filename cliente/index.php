<?php
    
    session_start();

    if (!isset($_SESSION['cliente'])) {
        echo '
            <script>
                alert("Se debe iniciar sesion para acceder");
                window.location = "index.php";
            </script>
        ';
        session_destroy();
        die();
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>ToBeerApp</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="CSS/Estilos.css">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0 , maximum-scala=1.0, minimum-scale=1.0">
    <link rel="icon" type="image/png" href="Img/favicon.png">
</head>

<body>
    <header class="main-header">
        <div class="container container-flex">
            <h1 class="main-title"><span class="color-span">To</span>BeerApp</h1>
            <nav class="main-nav">
                <span class="icon-menu" id="btn-menu"><i class="fas fa-bars"></i></span>
                <ul class="menu" id="menu">
                    <li class="menu_item"><a href="" class="menu_link"><span>Inicio</span></a></li>
                    <li class="menu_item"><a href="mesas/index.html" class="menu_link"><span>Mesas</span></a></li>
                    <li class="menu_item"><a href="" class="menu_link"><span>Contacto</span></a></li>
                    <li class="menu_item"><a href="producto/index.html" class="menu_link"><span>Productos</span></a></li>
                    <li class="menu_item"><a href="../php/cerrar_sesion.php" class="menu_link"><span>Cerrar sesión</span></a></li>
                    <div class="nav_social">
                        <a href="" class="nav-social_item"><i class="fab fa-facebook-f"></i></a>
                        <a href="" class="nav-social_item"><i class="fab fa-twitter"></i></a>
                        <a href="" class="nav-social_item"><i class="fab fa-youtube"></i></a>
                    </div>
                </ul>
            </nav>
        </div>
    </header>
    <div class="banner">
        <div class="banner_content">
            <div class="container">
                <h2 class="banner_title">01</h2>
                <p class="banner_txt"><span class="color-span">Lorem ipsum</span> dolor sit amet consectetur, adipisicing elit.
                </p>
            </div>
        </div>
    </div>
    <main class="main">
        <section class="Bienvenido">
            <h2 class="section_title">BIENVENIDO</h2>
            <p class="Bienvenido_txt">Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum in nam temporibus repellat saepe. Nostrum est itaque eveniet maxime, vel qui dolore accusantium totam earum, laudantium molestias. Aspernatur, aliquam magnam!</p>
            <a href="" class="Bienvenido_btn">Leer más</a>
        </section>
        <section class="Container_Diseno">
            <div class="Diseno_item">
                <h3 class="Diseno_title">Mesas</h3>
                <img src="img/Mesas.PNG" alt="" class="Diseno_img">
            </div>
            <div class="Diseno_item">
                <h3 class="Diseno_title">Productos</h3>
                <img src="img/Productos.PNG" alt="" class="Diseno_img">
            </div>
            <div class="Diseno_item">
                <h3 class="Diseno_title">Música</h3>
                <img src="img/Musica.PNG" alt="" class="Diseno_img">
            </div>
            <div class="Diseno_item">
                <h3 class="Diseno_title">Pista de baile</h3>
                <img src="img/Pista1.PNG" alt="" class="Diseno_img">
            </div>
        </section>
        <section class="container_comentarios">
            <h3 class="section_title">DANOS TU OPINION</h3>
            <img src="Img/persona.jpg" alt="" class="comentario_img">
            <p class="comentario_txt">Lorem ipsum dolor sit amet, consectetur adipisicing elit. In blanditiis voluptatibus numquam similique tempore dolor porro doloremque sequi maxime saepe unde, adipisci praesentium nihil, sint ullam sed nobis! Perferendis, ab?</p>
            <h4 class="comentario_name">Yonathan Baquero</h4>
        </section>
        <section class="container_tips">
            <div class="Diseno_item">
                <h3 class="Diseno_title">Nuestros eventos</h3>
                <img src="img/Eventos.PNG" alt="" class="Diseno_img">
            </div>
            <div class="container-box">
                <div class="box">
                    <div class="box-icon"><i class="fas fa-beer"></i></div>
                    <div class="box_content">
                        <h3 class="box_title">REALIZA TUS PEDIDOS</h3>
                        <p class="box_txt">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure magni omnis repudiandae, amet, praesentium dolorum.</p>
                    </div>
                </div>
                <div class="box">
                    <div class="box-icon"><i class="fas fa-tablet-alt"></i></div>
                    <div class="box_content">
                        <h3 class="box_title">SEPARA TU MESA</h3>
                        <p class="box_txt">Aspernatur numquam ipsa atque blanditiis quaerat itaque illo commodi asperiores voluptate explicabo, ad molestias.</p>
                    </div>
                </div>
                <div class="box">
                    <div class="box-icon"><i class="fas fa-money-bill-wave"></i></div>
                    <div class="box_content">
                        <h3 class="box_title">GENERA TUS PAGOS</h3>
                        <p class="box_txt">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio necessitatibus corrupti velit distinctio et reprehenderit.</p>
                    </div>
                </div>
            </div>
            </div>
        </section>
    </main>
    <footer class="main_footer">
        <div class="container">
            <div class="column column-50-25">
                <h2 class="footer_title">Compañia</h2>
                <p class="footer_txt">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste esse eius voluptatibus reprehenderit, vero distinctio aliquid illo totam possimus consectetur fugit hic ea tenetur cumque suscipit, explicabo deserunt nisi rerum.</p>
            </div>
            <div class="colum column column-50-25">
                <h2 class="footer_title">Tweets</h2>
                <p class="footer_txt"><i class="fab fa-twitter"></i>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accus.
                </p>
                <a href="" class="footer_link">http//example.com</a>
                <p class="footer_date"> About 15 minutes ago</p>
                <p class="footer_txt"><i class="fab fa-twitter"></i>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accus.
                </p>
                <a href="" class="footer_link">http//example.com</a>
                <p class="footer_date"> About a day ago</p>
            </div>
            <div class="column column-50-25">
                <h2 class="footer_title">Siguenos en:</h2>
                <div class="footer_social">
                    <div class="social_icon">
                        <i class="fab fa-facebook-f"></i>
                        <a class="social_link" href="">Like us on Facebook</a>
                    </div>

                    <div class="social_icon">
                        <i class="fab fa-twitter"></i>
                        <a class="social_link" href="">Follow us on twitter</a>
                    </div>
                    <div class="social_icon">
                        <i class="fab fa-whatsapp"></i>
                        <a class="social_link" href="">Follow us on whatsapp</a>
                    </div>
                    <div class="social_icon">
                        <i class="fab fa-youtube"></i>
                        <a class="social_link" href="">Follow us on youtube</a>
                    </div>
                </div>
            </div>
            <div class="column column-50-25">
                <h2 class="footer_title">Contacto</h2>
                <div class="footer_socials">
                    <div class="contact_icon">
                        <i class="fas fa-map-marker-alt"></i>
                        <p class="contact_txt" href="">El nombre de la compañia Lorem ipsum dolor, Polo Street(Yelow Door)
                        </p>
                    </div>
                    <div class="contact_icon">
                        <i class="fas fa-phone-alt"></i>
                        <p class="contact_txt" href="">54846416</p>
                    </div>
                    <div class="contact_icon">
                        <i class="fas fa-envelope"></i>
                        <p class="contact_txt" href="">sadjfknaf@ancal.co</p>
                    </div>
                </div>
            </div>
        </div>
        <p class="copy">&copy 2021 TobeerApp. Reservados todos los derechos | Design by <span class="color-span">S7udents</span> </p>
    </footer>

    <script src="js/Menu.js"></script>
</body>

</html>
