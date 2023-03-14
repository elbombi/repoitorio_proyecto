<?php
  include("vista/paginas/menu_admin.php");
?>
<center>
    <h2>Registro de PQRS</h2>
</center>
<div class="container-fluid">
    <form action="" method="post" class="bg bg-secondary">
        <div class="row p-5 ">
            <div class="col-4"></div>
            <div class="col-4">
                <label for="id_nom_pqr">Nombre del remitente</label>
                <input type="text" name="tx_nom_pqr" id="id_nom_pqr">
                <br><br>
                <label for="id_fech_pqr">Fecha de diligenciado</label>
                <input type="text" name="tx_fech_pqr" id="id_fech_pqr">
                <br><br>
                <label for="id_pqr">Id del PQRS</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="text" name="tx_pqr" id="id_pqr">
                <br><br>
            </div>
            <div class="col-4"></div>
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
