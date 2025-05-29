<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pagina Web</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" >
  </head>
  <body>
    <h1>Bienvenidos a nuestra pagina web</h1>
    <H6>
      SOMOS UNA EMPRESA DEDICADA A LA VENTA DE HARDWARE E INSUMOS GAMING
    <H6>
    <script src="assets/js/bootstrap.bundle.min.js" ></script>

    <!-- Barra de navegacion --> 

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
      <a class="navbar-brand" href="#">LOGO</a>
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">INICIO</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">ACERCA DE</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">REGISTRARSE</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search"/>
        <button class="btn btn-outline-success" type="submit">Buscar</button>
      </form>
    </div>
  </div>
</nav>

<!-- fin de la barra de navegacion -->
    
<!--carrusel-->

    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="assets/img/placa de video1.jpg" class="d-block w-100" alt="Placa de video">
    </div>
    <div class="carousel-item">
      <img src="assets/img/memoria ram.jpg" class="d-block w-100" alt="imagen de placa de video">
    </div>
    <div class="carousel-item">
      <img src="assets/img/disipador de aire 2.jpg" class="d-block w-100" alt="imagen de procesador">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<!-- fin del carrusel -->

<!-- Tarjetas -->

<div class="card mb-3" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="assets/img/lince.jpg" class="img-fluid rounded-start" alt="foto del lince">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">LINCE</h5>
        <p class="card-text">Vendedor con experiencia en atención al cliente y ventas de productos tecnológicos y gaming. Conocimiento sólido en periféricos, hardware y tendencias del mundo gamer. Enfocado en brindar asesoramiento personalizado, cumplir objetivos comerciales y garantizar una experiencia de compra satisfactoria. Habilidad para explicar características técnicas de manera clara, manejo de caja, inventario y redes sociales como canal de venta y promoción.</p>
        <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
      </div>
    </div>
  </div>
</div>
<div class="card mb-3" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="assets/img/persona1.jpg" class="img-fluid rounded-start" alt="foto del lince">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">BRIHANNA</h5>
        <p class="card-text">Vendedora proactiva y apasionada por la tecnología y el mundo gaming. Experiencia en ventas, atención al cliente y manejo de productos especializados como placas de video, auriculares, teclados y accesorios. Capacidad para asesorar según necesidades del cliente, generar confianza y fidelización. Buen manejo de sistemas de punto de venta, control de stock y promoción de productos en tienda física y redes sociales.</p>
        <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
      </div>
    </div>
  </div>
</div>
<div class="card mb-3" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="assets/img/persona2.jpg" class="img-fluid rounded-start" alt="foto del lince">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">PAULO</h5>
        <p class="card-text">Técnico en armado, mantenimiento y reparación de PC con enfoque en equipos de alto rendimiento para gaming. Experiencia en diagnóstico y solución de fallas de hardware y software, armado de PCs a medida según necesidades del cliente (streaming, eSports, diseño), instalación y configuración de sistemas operativos, drivers y periféricos. Conocimiento actualizado de componentes como placas de video, refrigeración líquida, overclocking y optimización de rendimiento. Atención personalizada, soporte postventa y asesoramiento técnico en tienda.</p>
        <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
      </div>
    </div>
  </div>
</div>
<!-- fin de las tarjetas -->
  </body>
</html>