<!-- Formulario de registro -->

<div class="container py-5">
  <h2>Formulario de Registro</h2>
  <form action="procesar_registro.php" method="POST">
    <div class="mb-3">
      <label for="nombre" class="form-label">Nombre</label>
      <input type="text" class="form-control" id="nombre" name="nombre" required>
    </div>
    <div class="mb-3">
      <label for="correo" class="form-label">Correo electrónico</label>
      <input type="email" class="form-control" id="correo" name="correo" required>
    </div>
    <div class="mb-3">
      <label for="password" class="form-label">Contraseña</label>
      <input type="password" class="form-control" id="password" name="password" required>
    </div>
    <button type="submit" class="btn btn-success">Registrarme</button>
  </form>
  <script src="assets/js/bootstrap.bundle.min.js"></script>
</div>

<!-- Fin del formulario -->