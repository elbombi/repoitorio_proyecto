<?php
  include("plantilla/menu.php")
?>
<div class="container-fluid pb-2" style="background-image:url(imagenes/empresa.jpg);background-repeat:no-repeat;background-size:100%;">
  <div class="row">
    <div class="col-2"></div>
    <div class="col-4">
      <div class="card" style="width: 18rem;">
        <img src="imagenes/pdf.png" class="card-img-top" style="height:350px;" alt="...">
        <div class="card-body">
          <h5 class="card-title">Documento PDF</h5>
          <p class="card-text">Aqui se puede descargar y ver el documento escrito sobre nuestra empresa</p>
          <a href="?opcion=pdf" class="btn btn-dark">Descargar</a>&nbsp;&nbsp;&nbsp;&nbsp;
          <a href="?opcion=pdf2" class="btn btn-dark">Ver archivo</a>
        </div>
      </div>
    </div>
    <div class="col-4">
      <div class="card" style="width: 20rem; ">
          <img src="imagenes/ER.png" class="card-img-top" style="height:350px;" alt="...">
          <div class="card-body">
            <h5 class="card-title">Documento Modelo Conseptual</h5>
            <p class="card-text">
              Aqui se puede descargar y ver el Documento o imagen del Modelo Conseptual
            </p>
            <a href="?opcion=er" class="btn btn-dark">Descargar</a>&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="?opcion=er2" class="btn btn-dark">Ver archivo</a>
          </div>
        </div>
    </div>
    <div class="col-2"></div>
  </div>  
</div>