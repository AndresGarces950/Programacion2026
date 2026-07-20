<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto | SPA ARMONÍA</title>
    <!-- Bootstrap CSS -->
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
                <li class="nav-item"><a class="nav-link" href="reservas.php">Reservas</a></li>
                <li class="nav-item"><a class="nav-link active" href="contacto.php">Contacto</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- ================= FORMULARIO DE CONTACTO ================= -->
<section class="container py-5">
    <div class="row">
        <div class="col-md-6">
            <h2 class="text-success">Contáctanos</h2>
            <p>¿Tienes alguna duda o necesitas más información? Escríbenos.</p>
            
            <div class="mt-4">
                <p><i class="bi bi-geo-alt-fill"></i> Dirección: Calle 123 #45-67, Ciudad</p>
                <p><i class="bi bi-telephone-fill"></i> Teléfono: +57 300 123 4567</p>
                <p><i class="bi bi-envelope-fill"></i> Email: info@spaarmonia.com</p>
            </div>
        </div>

        <div class="col-md-6">
 <!-- ================= FORMULARIO DE CONTACTO ================= -->
<section class="container py-5">
    <div class="row">
        
        <!-- Información -->
        <div class="col-md-6">
            <h2 class="text-success">Contáctanos</h2>
            <p>¿Tienes alguna duda o necesitas más información? Escríbenos.</p>

            <div class="mt-4">
                <p><strong>📍 Dirección:</strong> Calle 123 #45-67, Ciudad</p>
                <p><strong>📞 Teléfono:</strong> +57 300 123 4567</p>
                <p><strong>✉️ Correo:</strong> info@spaarmonia.com</p>
            </div>
        </div>

        <!-- Formulario -->
        <div class="col-md-6">

            <form action="enviar_contacto.php" method="POST" class="card shadow p-4">

                <h3 class="text-center text-success mb-4">
                    Envíanos un mensaje
                </h3>

                <div class="mb-3">
                    <label class="form-label">Nombre</label>
                    <input
                        type="text"
                        name="nombre"
                        class="form-control"
                        placeholder="Ingrese su nombre"
                        required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Correo Electrónico</label>
                    <input
                        type="email"
                        name="email"
                        class="form-control"
                        placeholder="correo@ejemplo.com"
                        required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Mensaje</label>
                    <textarea
                        name="mensaje"
                        class="form-control"
                        rows="5"
                        placeholder="Escriba aquí su mensaje..."
                        required></textarea>
                </div>

                <button type="submit" class="btn btn-success w-100">
                    📩 Enviar Mensaje
                </button>

            </form>

        </div>

    </div>
</section>

</form>
        </div>
    </div>
</section>

<!-- ================= PIE DE PÁGINA ================= -->
<footer class="bg-dark text-white text-center p-4">
    <p>© 2026 SPA ARMONÍA | Todos los derechos reservados.</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>