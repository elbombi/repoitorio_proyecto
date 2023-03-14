<?php
  include("vista/paginas/menu_admin.php");
?>
<center>
    <h2>Buscar Productos</h2>
</center>
<form action="" method="post" class="bg bg-secondary">
    <div class="row p-4">
        <div class="col-2"></div>
        <div class="col-4">
            <label for="id_nom_prod">Nombre del Producto</label>
            <input type="text" name="tx_nom_prod" id="id_nom_prod">
            <br><br>
        </div>
        <div class="col-4">
            <label for="id_pre_prod">Precio del producto</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="text" name="tx_pre_prod" id="id_pre_prod">
            <br><br>
        </div>
        <div class="col-2"></div>
        <br><br><br>
        <center>
            <label for="id_prod">Id del producto</label>
            <input type="text" name="tx_prod" id="id_prod">
        </center>

    </div>        
    <hr style="color: black;">
    <div class="row">
        <div class="col-8"></div>
        <div class="col-3 mb-3">
            <button class="btn btn-dark bg-dark" type="submit" name="btn_login">Buscar</button>
        </div>
        <div class="col-1"></div>
    </div>
</form>
