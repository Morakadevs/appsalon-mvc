<h1 class="nombre-pagina">Olvide Password</h1>
<p class="descripcion-pagina">Reestablece tu password escribientdo tu email 
acontinuación</p>

<?php include_once __DIR__ . '/../templates/alertas.php'; ?>

<form class="formulario" action="/olvide" method="post">
    <div class="campo">
        <label for="email">Email</label>
        <input
            type="email"
            id="email"
            name="email"
            placeholder="Tu Email"  
        />
    </div>

    <input type="submit" class="boton" value="Enviar Instrucciones">
</form>

 <div class="acciones">
    <a href="/">¿Ya tienes una cuenta? Inicia Sesión</a>
    <a href="/olvide" >¿Aún no tienes una cuenta? Crear una</a>
</div>