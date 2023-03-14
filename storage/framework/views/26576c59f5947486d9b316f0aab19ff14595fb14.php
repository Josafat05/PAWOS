<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CLOCK WORLD</title>
  <!-- Font -->
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500&display=swap" rel="stylesheet">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
  <!-- CUSTOM CSS -->
  <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('css/normaliza.css')); ?>">
</head>




<body>
  <div class="menu-btn">
    <i class="fas fa-bars fa-2x"></i>
  </div>

  <div class="container">
    <!-- Navegacion -->
    <nav class="nav-main">
      <img src="<?php echo e(asset('img/LOGO (1).png')); ?>" alt="TechNews Logo" class="nav-brand">
      <p class="nav-menu1">CLOCK WORLD</p>
      <ul class="nav-menu">
        <li>
          <a href="<?php echo e(url('/blog')); ?>">Blog</a>
        </li>
      </ul>
      <ul class="nav-menu-right">
      </ul>
      <ul class="nav-menu-right">
        <li>
        </li>
      </ul>
      <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <?php echo e(__('Cerrar Sesión')); ?>

                                    </a>

                                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                                        <?php echo csrf_field(); ?>
                                    </form>
                                </div>
    </nav>
    
    <hr>

    <header class="showcase">
      <h2>CLOCK WORLD</h2>
      <p>Vea el reloj solo cuando no tenga trabajo …. No vea el reloj cuando esté trabajando …. El reloj es un candado para el éxito</p>
        <p>Con el proposito de brindar los mejores relojes de calidad evitando en si la pirateria que daña la marca.
      </p>
      <!--<a href="./iniciose.html" class="btn">Iniciar Sesión <i class="fas fa-chevron-right"></i>-->
      </a>
    </header>

    <div class="news-cards">
      <div>
        <img src="<?php echo e(asset('img/news1.jpg')); ?>" alt="" />
        <h3>Breguet Grande Complication Marie Antoinette</h3>
        <p>Breguet Grande Complication Marie Antoinette entra en el ranking especial de los mejores relojes del mundo en términos de valor, con un precio que ronda los 30 millones de dólares. Hablamos del Breguet Grande Complication Marie Antoinette, una joya que fue hecha específicamente para la reina María Antonieta.
        </p>
      </div>
      <div>
        <img src="<?php echo e(asset('img/news2.jpg')); ?>" alt="" />
        <h3>Jaeger-LeCoultre Joaillerie 101 Manchette</h3>
        <p>Si se pregunta por qué este Jaeger-LeCoultre Joaillerie 101 Manchette cuesta alrededor de 26 millones, entonces debería echar un vistazo al estilo de este reloj. No estamos hablando del reloj habitual con manecillas y esfera de ancho completo, este modelo es en realidad una pulsera, si se fija bien, en un pequeño punto podrá vislumbrar un dial analógico muy pequeño escondido entre las fascinantes decoraciones.
        </p>
      </div>
      <div>
        <img src="<?php echo e(asset('img/news3.jpg')); ?>" alt="" />
        <h3>Reloj De Bolsillo Patek Philippe Henry Graves Super Complication</h3>
        <p>Este modelo, también conocido con el nombre artístico de «Mona Lisa», fue encargado en 1927 por Henry Graves, un banquero neoyorquino de la época que quería un reloj muy complejo para ganar un desafío con James Ward Packard.
        </p>
      </div>
      <div>
        <img src="<?php echo e(asset('img/news4.jpg')); ?>" alt="" />
        <h3>Jacob & Co. Billionaire Watch</h3>
        <p>Jacob & Co. Billionaire Watch no solo es un reloj precioso por los diamantes en forma de esmeralda de 260 quilates y la caja de oro blanco de 18 quilates, sino también por su mecanismo esqueletizado, con tourbillon.
        </p>
      </div>
    </div>
    <section class="cards-banner-one">
      <div class="content">
        <h2>MAYOR EXPORTADOR DE RELOJES EN EL MUNDO</h2>
    
        <p>Los relojes exportados desde Suiza en 2020 alcanzaron un valor de aproximadamente 18.000 millones de euros. De esta forma, el país europeo se posicionó a la cabeza de la clasificación mundial de exportadores de este artículo. Una situación que no sorprende si se considera que Suiza es, precisamente, origen de una de las marcas de relojes más conocidas y valiosas del mundo: Rolex. Hong Kong y China se situaron en segundo y tercer lugar, respectivamente.</p>
        <!--<a href="./Catalogo.html" class="btn">Catálogo<i class="fas fa-chevron-right"></i></a>-->
      </div>
    </section>

   
   

    <!-- Redes -->
    <section class="social">
      <p>Siguenos en Facebook</p>
      <div class="links">
        <a href="https://www.facebook.com/profile.php?id=100088344587515">
          <i class="fab fa-facebook-f"></i>
        </a>
      </div>
    </section>
  </div>
<!--
  <div class="footer-links">
    <div class="footer-container">
      <ul>
        <li>
          <a href="#">
            <h3>Title One</h3>
          </a>
        </li>
      </ul>
    </div>
  </div>
  -->

  <footer class="footer">
    <h3>CLOCK WORLD LUIS RANGEL &copy; DICIEMBRE 2022</h3>
  </footer>


  <script src="https://unpkg.com/scrollreveal"></script>
  <script src="<?php echo e(asset('js/main.js')); ?>"></script>
</body>

</html><?php /**PATH C:\Users\luisr\OneDrive\Escritorio\Paginas\example-app\resources\views/paginaprincipal.blade.php ENDPATH**/ ?>