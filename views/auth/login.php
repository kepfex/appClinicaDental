<main class="auth">
    <div class="auth__contenido">
        <div class="auth__imagen-fondo">
            <picture>
                <source srcset="/build/img/bg_1.avif" type="image/avif">
                <source srcset="/build/img/bg_1.webp" type="image/webp">
                <img loading="lazy" src="/build/img/bg_1.jpeg" alt="dentista mujer con paciente">
            </picture>
        </div>

        <div>
            <div class="volver">
                <a class="volver__enlace" href="/"><i class="fa-solid fa-arrow-left"></i> Atrás</a>
            </div>

            <div class="auth__formulario">
                <div class="auth__logo">
                    <img class="auth__logo-icono" src="/build/img/SmartDent_logo.svg" alt="logo clinica SmartDent">
                    <div class="auth__logo-texto">
                        <h1 class="auth__logo-nombre">
                            Smart<span class="auth__logo-nombre--delgado">Dent</span>
                        </h1>
                    </div>
                </div>

                <h2 class="auth__titulo"><?php echo $titulo; ?></h2>
                <p class="auth__texto">Inicia sesión en SmartDent</p>

                

                <form class="formulario-2" method="POST" action="/login">
                    <div class="formulario-2__campo">
                        <input type="email" class="formulario-2__input" placeholder=" " id="email" name="email">
                        <label for="email" class="formulario-2__label">Correo electrónico</label>
                    </div>

                    <div class="formulario-2__campo">
                        <input type="password" class="formulario-2__input" placeholder=" " id="password" name="password">
                        <label for="password" class="formulario-2__label">Contraseña</label>
                    </div>

                    <input type="submit" class="formulario-2__submit formulario-2__submit--full" value="Iniciar Sesión">
                </form>

                <div class="acciones">
                    <a href="/olvide" class="acciones__enlace">¿Olvidaste tu Password?</a>
                    <p class="acciones__texto">¿Todavía no tienes una cuenta? <a href="/registro" class="acciones__enlace">Regístrate</a></p>
                </div>
            </div>
        </div>
    </div>
</main>