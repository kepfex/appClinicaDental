<header class="header">
    <div class="header__contenido contenedor">

        <nav class="navegacion">
            <div class="navegacion__secciones">
                <a href="" class="navegacion__enlace">Inicio</a>
                <a href="" class="navegacion__enlace">Servicios</a>
                <a href="" class="navegacion__enlace">Nosotros</a>
                <a href="" class="navegacion__enlace">Contacto</a>
            </div>
            <div class="navegacion__login">
                <a href="/login" class="navegacion__enlace navegacion__enlace--iniciar">Iniciar Sesión</a>
                <a href="/registro" class="navegacion__enlace navegacion__enlace--registrar">Registrarse</a>
            </div>
        </nav>
    </div>
</header>


<?php
$url_index = $_SERVER['PATH_INFO'] ?? '/';

if ($url_index === '/') {
?>
    <main class="inicio">
        <div class="contenedor inicio__contenido">
            <p class="inicio__ubicacion">
                En Lima, Perú
            </p>
            <div class="logo">
                <img class="logo__icono" src="build/img/SmartDent_logo.svg" alt="logo clinica SmartDent">
                <div class="logo__texto">
                    <h1 class="logo__nombre">
                        Smart<span class="logo__nombre--delgado">Dent</span>
                    </h1>
                    <p class="logo__eslogan">SALUD & ESTÉTICA DENTAL</p>
                </div>
            </div>
            <p class="inicio__texto">Una excelente experiencia</p>
            <p class="inicio__texto inicio__texto--end">Odontológica</p>

            <a href="#" class="inicio__boton">Reservar Cita</a>
        </div>
    </main>
<?php
}
?>