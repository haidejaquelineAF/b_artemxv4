<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <!--Styles-->
        <!--bootstrap-->
        <link rel="stylesheet" href="<?php echo base_url;?>Assets/Tools/Bootstrap/bootstrap-5.0.2-dist/css/bootstrap.min.css">

</head>
<body>
    

    <button class="mt-5 btn btn-primary rounded-0" data-bs-toggle="modal" data-bs-target="#mdlregistro" data-bs-whatever="@mdo">Registrarme</button>


    <!--MODALS-->
    <!---MODAL ESTUDIOS-->
        <div class="modal fade" id="mdlregistro" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-bs-backdrop="static">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content rounded-0 border-0">
                    <div class="modal-header bg-dark rounded-0">
                        <h5 class="modal-title text-light" id="exampleModalLabel">Nuevo usuario</h5>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form class="row g-3" method="post" id="frmRegistro">
                            <div class="col-md-12">
                                <label for="nombre_usuario" class="form-label">Nombre</label>
                                <input type="text" class="form-control" id="nombre_usuario" name="nombre_usuario" required>
                            </div>
                            <div class="col-md-12">
                                <label for="correo_usuario" class="form-label">Correo</label>
                                <input type="text" class="form-control" id="correo_usuario" name="correo_usuario" required>
                            </div>
                            <div class="col-md-12">
                                <label for="passwrd_usuario" class="form-label">Contraseña</label>
                                <input type="password" class="form-control" id="passwrd_usuario" name="passwrd_usuario" required>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary rounded-0" data-bs-dismiss="modal">Regresar</button>
                        <button type="button" class="btn btn-dark rounded-0" onclick="registrarUser(event);">Registrarme</button>
                    </div>
                    </div>
                </div>
            </div>
        <!---FIN MODAL ESTUDIOS-->



        <script>
            const base_url = "<?php echo base_url; ?>";
        </script>
    <!---JS------->
        <!--bootstrap-->
        <script src="<?php echo base_url;?>Assets/Tools/Bootstrap/bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js"></script>
        <!--jquery-->
        <script src="<?php echo base_url;?>Assets/Tools/Jquery/jquery-3.7.1.min.js"></script>
        <!--Ionicons-->
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
        <!--Mis JS-->
        <script src="<?php echo base_url;?>Assets/js/JS_Home/JS_registronu_00.js"></script>
</body>
</html>
