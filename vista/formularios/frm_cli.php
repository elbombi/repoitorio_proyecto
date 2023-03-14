<?php
  include("vista/paginas/menu_admin.php");
?>
<center>
    <h2>Registro de Clientes</h2>
</center>
<div class="container-fluid">
    <form action="" method="post" class="bg bg-secondary">
        <div class="row p-5 ">
            <div class="col-3"></div>
            <div class="col-3">
                <label for="id_nom_cli">Nombre del Cliente</label>
                <input type="text" name="tx_nom_cli" id="id_nom_cli">
                <br><br>
                <label for="id_tel_cli">Telefono del Cliente</label>
                <input type="text" name="tx_tel_cli" id="id_tel_cli">
                <br><br>
            </div>
            <div class="col-3">
                <label for="id_dirrre_cli">Direccion del Cliente</label>
                <input type="text" name="tx_dire_cli" id="id_dire_cli">
                <br><br>
                <label for="id_email">Email del Cliente</label>
                <input type="text" name="tx_email" id="id_email">
                <br><br>
            </div>
            <div class="col-3"></div>
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
</div>