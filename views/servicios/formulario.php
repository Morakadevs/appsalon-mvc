<div class="campo">
    <label form="nombre">Nombre</label>
    <input
        type="text"
        id="nombre"
        placeholder="Nombre Servicio"
        name="nombre"
        value="<?php echo$servicio->nombre; ?>"
    />
</div>

<div class="campo">
    <label form="precio">Precio</label>
    <input
        type="number"
        id="precio"
        placeholder="Precio Servicio"
        name="precio"
        value="<?php echo$servicio->precio; ?>"
    />
</div>  