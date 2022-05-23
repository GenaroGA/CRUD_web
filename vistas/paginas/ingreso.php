<h1>Registro</h1>
<div class="d-flex justify-content-center text-center">
    <form class="p-5 bg-light" method="post">

        <div class="form-group">
            <label for="email">Correo electronico</label>

            <!--icono--->
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                </div>
                <input type="email" class="form-control" id="Email" name="ingresoEmail">
            </div>
        </div>
        <div class="form-group">
            <label for="pwd">Contraseña:</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-lock"></i></span>
                </div>
                <input type="password" class="form-control" id="pwd" name="ingresoPassword">
            </div>
        </div>
        <?php
        /*FORMA EN QUE S EINSTANCIA LA CLASE DE UN METODO NO ESTATICO */
        //$registro = new ControladorFormularios();
        //$registro ->ctrRegistro();
        /*FORMA EN QUE SE INSTANACIA DE MANERA ESTATICA */

        $ingreso = new ControladorFormularios();
        $ingreso -> ctrIngreso();

        ?>
        <button type="submit" class="btn btn-primary">Ingresar</button>

    </form>
</div>