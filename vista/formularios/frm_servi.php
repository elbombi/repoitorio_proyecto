<?php
    include("plantilla/menu.php");
?>

<form action="" method="post" class="bg bg-secondary">
    <div class="row p-4">
        <div class="col-2"></div>
        <div class="col-4">
            <label for="id_nom">Nombres</label>
            <input type="text" name="tx_nom" id="id_nom">
            <br><br>
            <label for="id_fech">Fecha</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="text" name="tx_fech" id="id_fech">
        </div>
        <div class="col-4">
            <label for="id_ape">Apellidos</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="text" name="tx_ape" id="id_ape">
            <br><br>
            <label for="id_cau">Tipo de problema</label>
            <select name="tx_opc" id="id_nom">
                <option value="">Producto no encontrado</option>
                <option value="">Fallas en la pagina</option>
                <option value="">No funciona favoritos</option>
                <option value="">otro...</option>
            </select>
        </div>
        <div class="col-2"></div>
        <br><br><br>
        <center>
            <br>
        <label for="id_obs">Observaciones</label>
        <input type="text" name="tx_obs" id="id_obs">
        </center>
    </div>        
    <hr style="color: black;">
    <div class="row">
        <div class="col-8"></div>
        <div class="col-3 mb-3">
            <button class="btn btn-dark bg-dark" type="submit" name="btn_login">Enviar</button>
        </div>
        <div class="col-1"></div>
    </div>
</form>

