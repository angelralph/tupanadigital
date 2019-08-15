<!DOCTYPE html>
<html lang="es">
<head>
<link rel="apple-touch-icon" sizes="180x180" href="imagenes/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="imagenes/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="imagenes/favicon-16x16.png">
<link rel="manifest" href="/site.webmanifest">
<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
<meta name="msapplication-TileColor" content="#2d89ef">
<meta name="theme-color" content="#ffffff">

        <link rel="stylesheet" href="owl/owl.carousel.min.css">
        <link rel="stylesheet" href="owl/owl.theme.default.min.css">
    <link rel="stylesheet" href="estilos/estilo.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no">

    <title>TuPanaDigital</title>
</head>
<body>
  <a id="whatsapp" href="https://api.whatsapp.com/send?phone=584123921718"><img src="imagenes/whatsapp.png" ></a>
    
    <header>
<div class="menu">
    <div class="contenedor">
  <img class="logo" src="imagenes/logopana.png" >
   
    <img class="menu-icon" src="imagenes/menu.png" >
    <nav>
        <ul>
            <li><a href="#sobre-mi">Sobre nosotros</a></li>
            <li><a href="#servicios">Servicios</a></li>
            <li><a href="#blog">Blog </a></li>
            <li><a href="#contacto">Contacto </a></li>
        </ul>


    </nav>
    
    </div>
</div>


    </header>

<main>
        <section id="sobre-mi">
                <div class="contenedor">
                  <h3>Sobre Nosotros</h3>
                  <div class="contenedor-sobremi">
                   
                    <div class="texto">
                      <p>Somo una cuenta en instagram de información y entretenimiento, cuyo objetivo principal es ayudar al venezolano a olvidarse un poco del contenido habitual y de los problemas del país, para tratar de superarlos con una buena sonrisa.</p>
                      <p>Tambien, nos gusta asesorar a aquellos que quieran comenzar en el emprendimiento personal, motivandolos y dando algunos tips para se animen a comenzar y lograr sus metas, aun estando en un entorno donde no es nada facil como lo es nuestro pais.</p>
                      <p> Sabemos que a veces resulta dificil darse a conocer o promocionarse, generalmente para los nuevos emprendedores, es por eso que <span id="tupana">TuPanaDigital</span> ha decidido ofrecer algunos servicios que haran que los nuevos emprendedores logren dar ese paso inicial que necesitan.</p>

                      <p>Puedes ponerte en contacto con nosotros a través de Facebook, instagram o completando el formulario de contacto que se encuentra al final de este sitio web.</p>
                    </div>
                    <div class="instagram">
                      <aside>
  
                        <!-- SnapWidget -->
<iframe src="https://snapwidget.com/embed/721887" class="snapwidget-widget" allowtransparency="true" frameborder="0" scrolling="no" style="border:none; overflow:hidden; width:100%; height:100%; margin:auto;"></iframe>
                      </aside>
                    </div>
                  </div>
                </div>


        </section>

              <section id="servicios">
                  <div class="contenedor">
                    <h3>Servicios</h3>
                    <div class="contenedor-servicios">
                            <div class="servicio violeta">
                                    <h4>Publicidad</h4>
                                    <p>Ayudamos a que tu producto, servicio, negocio, o incluso tu cuenta de red Social se haga conocida mediante nuestro servicio de publicidad. Cóntamos con miles de seguidores y nuestras practicas de SEO nos permiten tener un gran alcance y hacer que la informacion llegue a la mayor cantidad de personas posibles. </p>
                                    <img class="icono" src="imagenes/marketing.png">
                                    <img class="ondas" src="imagenes/waves.png">
                                  </div>
                                  <div class="servicio celeste">
                                    <h4>Marketing Digital</h4>
                                    <p> Si quieres generar ingresos mediante el uso de Redes Sociales para comercializar aun mas tus productos, debes de considerar la gestión profesional de tu cuenta, con alguien capacitado.<br/>
                                    Te ofrecemos nuestros servicios, desde estrategia de marketing y horarios especializados para que tengas un mejor alcance, hasta diseño personalizado de cada imagen. </p>
                                    
                                    <img class="icono" src="imagenes/seo.png">
                                    <img class="ondas" src="imagenes/waves.png">
                                  </div>
                                  <div class="servicio violeta">
                                    <h4>Diseño Grafico</h4>
                                    <p> Contamos con la capacidad como diseñadores graficos para ayudar a que tu marca conecte con tu audiencia, especilizandonos en creacion de naming, logotipo y diseño publicitario. 
                                    </p>
                                    <img class="icono" src="imagenes/monitor.png">
                                    <img class="ondas" src="imagenes/waves.png">
                                  </div>
                               </div>
                 </div>
              </section>
              <section id="que-esperas">
  <div class="contenedor">
    <h3>¿Qué estas esperando?</h3>
    <a href="#contacto">Contactanos</a>
    <!-- Contactanos y AUMENTA TUS SEGUIDORES -->
   
  </div>
</section>

 





<section id="contacto">
  <?php
      if(@$_GET['i']=='ok') { // QUIERE DECIR QUE EL FORMULARIO SE ENVIO CORRECTAMENTE ?>

      <h3>La consulta se envio correctamente. Nos contactaremos a la brevedad.</h3>

      <?php
      } else{
      ?>
  <div class="contenedor">
    <h3>Contacto</h3>
    <form action="envio-formulario.php" method="post" enctype="multipart/form-data">
      <input type="text" placeholder="Nombre" name="nombre" required>
      <input type="email" placeholder="Email" name="email" required>
      <textarea placeholder="Mensaje" name="mensaje" required></textarea>
      <input type="submit" value="ENVIAR MENSAJE">
    </form>
          <?php } ?>


    <div class="contacto-info">
      <div class="mail"><img src="imagenes/mail-icon.png" >Tupanadigitalpublicidad@gmail.com</div>
      <div class="whatsapp"><img src="imagenes/whatsapp-icon.png">+584123921718</div>
    </div>


  </div>
</section>

</main>

<footer>
  <div class="contenedor">
    <div class="redes">
      <a href="https://www.facebook.com/TupanaDigital/"><img src="imagenes/facebook.png" alt="imagen de facebook"></a>
      <a href="https://www.instagram.com/tupanadigital/"><img src="imagenes/ig.png" alt="imagen de Instagram"></a>
      <a href="https://www.youtube.com/channel/UC7uLpDqa2IsFKoUHquH_ucA"><img src="imagenes/youtube.png" alt="imagen de facebook"></a>
    
    </div>
    <div class="parrafo">
      <p>© 2019 Angel Useche | Desarrollador Web. Todos los derechos reservados</p>
    </div>
  </div>
</footer>


<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
<script src="owl/owl.carousel.min.js"></script>
<script>
        $('.owl-carousel').owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        dots:false,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:5
            }
        }
    })
    </script>



    <script>
    
    $(document).ready(function(){

      $(window).scroll(function(){ 
        scroll = $(window).scrollTop();
        if (scroll > 100) {
          $("#whatsapp").css({"z-index":"100"});
          $(".menu").css({"position":"fixed"});
          $(".menu").css({"width":"100%"});
          $(".menu").css({"top":"0"});
          $(".menu").css({"background":"#fff"});
          $(".menu a").css({"color":"#000"});
          $(".logo").css({"color":"#000"});
          $(".menu").css({"box-shadow": "rgba (0, 0, 0, 0.22) 6px 1px 1px"});
          $(".menu").css({"z-index":"100"});
        } else{
          /*cuando no hay scroll o el scroll sube */
          $(".menu").css({"position":"relative"});
          $(".menu").css({"background":"transparent"});
          $(".menu").css({"box-shadow":"0 0 0"});
          $(".menu a").css({"color":"#fff"});
          $(".logo").css({"color":"#fff"});

        }


      })

      $(".menu-icon").click(function(){
        $("header nav").slideToggle();/*esta funcion hace que el menu aparezca deslizandoce hacia abajo y desaparezca deslizandose hacia arriba, tambien tenemos slideDown y slideUp*/ 


      })
    })

    </script>

    <!-- SnapWidget -->
<script src="https://snapwidget.com/js/snapwidget.js"></script>


</body>
</html>