<?php include ('header.php'); ?> 
    <section class= "contacto_contenido">
        <form action="enviar_consulta.php" method="POST">
            <label for="nombre"> Nombre </label>
            <input type="text" name="nombre" class="contacto_input">
            <label for="apellido"> Apellido </label>
            <input type="text" name="apellido" class="contacto_input">
            <label for="detalle"> Detalle </label>
            <textarea name="detalle" cols="30" rows="5" class="contacto_input"> </textarea>
                 <input type="submit" value="Enviar Pedido">      
        </form>
        <?php
        if (isset ($_GET['ok'])){
            echo "<h3> Su pedido fue enviado con exito </h3>";
        }
        ?>
    </section>  
</body>
</html>






