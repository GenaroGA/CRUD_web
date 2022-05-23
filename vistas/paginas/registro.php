<h1>Registro</h1>
<div class="d-flex justify-content-center text-center">
    <form class="p-5 bg-light" method="post">

        <div class="form-group">
            <label for="nombre">Nombre:</label>

            <!--Iconos--->
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                </div>
                <input type="text" class="form-control" id="nombre" name="registroNombre">
            </div>

            
        </div>

        <div class="form-group">
            <label for="email">Correo electronico</label>

            <!--icono--->
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                </div>
                <input type="email" class="form-control" id="Email" name="registroEmail">
            </div>
        </div>
        <div class="form-group">
            <label for="pwd">Contraseña:</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-lock"></i></span>
                </div>
                <input type="password" class="form-control" id="pwd" name="registroPassword">
            </div>
        </div>
        <?php
        /*FORMA EN QUE S EINSTANCIA LA CLASE DE UN METODO NO ESTATICO */
        //$registro = new ControladorFormularios();
        //$registro ->ctrRegistro();
        /*FORMA EN QUE SE INSTANACIA DE MANERA ESTATICA */

        $registro = ControladorFormularios::ctrRegistro();

        if ($registro == "ok") {
            echo '<script>
            if (window.history.replaceState){
                widows.history.repalceState(null, null, window.location.href);
            }
        </script>';
            echo '<div class "alert alert-success">El usuario ha sido registrado</div>';
        }




        ?>
        <button type="submit" class="btn btn-primary">Enviar</button>

    </form>
</div>