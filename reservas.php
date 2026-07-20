<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservas | SPA ARMONÍA</title>
    <!-- Bootstrap CSS para diseño moderno -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>

<!-- ================= MENÚ ================= -->
<nav class="navbar navbar-expand-lg navbar-dark bg-success sticky-top">
    <div class="container">
   <a class="navbar-brand fw-bold" href="index.html">🌿 SPA ARMONÍA</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="menu">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="index.html">Inicio</a></li>
                <li class="nav-item"><a class="nav-link" href="nosotros.html">Nosotros</a></li>
                <li class="nav-item"><a class="nav-link" href="servicios.html">Servicios</a></li>
                <li class="nav-item"><a class="nav-link" href="galeria.html">Galería</a></li>
                <li class="nav-item"><a class="nav-link active" href="reservas.php">Reservas</a></li>
                <li class="nav-item"><a class="nav-link" href="contacto.php">Contacto</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- ================= FORMULARIO DE RESERVA ================= -->
<section class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow p-4">
                <h2 class="text-center text-success mb-4">Reserva tu cita</h2>
                <form action="guardar.php" method="POST">
                
                    <div class="mb-3">
                        <label class="form-label">Nombre Completo</label>
                        <input type="text" name="nombre" class="form-control" required>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Teléfono</label>
                            <input type="tel" name="telefono" class="form-control" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Correo Electrónico</label>
                            <input type="email" name="email" class="form-control" required>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Tipo de Masaje</label>
                        <select name="masaje" class="form-select">
                            <option value="relajante">Masaje Relajante</option>
                            <option value="deportivo">Masaje Deportivo</option>
                            <option value="piedras">Piedras Calientes</option>
                            <option value="aromaterapia">Aromaterapia</option>
                        </select>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Fecha</label>
                            <input type="date" name="fecha" class="form-control" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Hora</label>
                            <input type="time" name="hora" class="form-control" required>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Observaciones</label>
                        <textarea name="mensaje" class="form-control" rows="3"></textarea>
                    </div>

                    <button type="submit" class="btn btn-success w-100">Confirmar Reserva</button>
                </form>
            </div>
        </div>
    </div>
</section>

<footer class="bg-dark text-white text-center p-4">
    <p>© 2026 SPA ARMONÍA | Todos los derechos reservados.</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>