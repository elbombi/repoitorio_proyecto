<form class="row g-3 p-5 needs-validation row-success bg-secondary" action="?opcion=adm" method="post">
    <div class="col-2"></div>
    <div class="col-4">
        <img src="imagenes/usuario.png" width="250px" height="250px" alt="">
    </div>
    <div class="position-relative col-4">
        <label for="validationTooltip01" class="form-label">Usuario</label>
        <input type="text" class="form-control" id="validationTooltip01" value="" required>
        <div class="valid-tooltip">
            Correcto
        </div>
        <br><br>
        <label for="validationTooltip02" class="form-label">Contraseña</label>
        <input type="password" class="form-control" id="validationTooltip02" value="Otto" required>
        <br><br>
        <label for="validationTooltip03" class="form-label">Cargo</label>
        <select class="form-select" required aria-label="select example">
            <option value="1" >Administrador</option>
            <option value="2">Cliente</option>
        </select>
        <div class="invalid-feedback">Dato invalido</div>
        <br><br>
    </div>
    <div class="col-2"></div>
    <hr>
    <div class="row">
        <div class="col-8"></div>
        <div class="col-3">
            <button class="btn btn-dark" type="submit">Ingresar</button>
        </div>
        <div class="col-1"></div>
    </div>
</form>
