<?php

    require_once("c:/xampp/htdocs/login/view/head/head.php");

?>

    <div class="fondo-login">
        <div class="icon">
            <a href="/login/index.php">
                <i class="fa-solid fa-shield-dog dog-icon"></i>
            </a>
        </div>
        <div class="titulo">
            Inicia sesion en Dogcom
        </div>
        <form action="verificar.php" method="post" class="col-3 login" autocomplete="off">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">
                    Email address
                </label>
                <input type="email" name="correo" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">
                    Password
                </label>
                <div class="box-eye">
                <Button type="button" >
                    <i id="eyepassword" class="fa-solid fa-eye changePassword"></i>
                </Button></div>
                <input type="password" name="contrasena" class="form-control" id="exampleInputPassword1">
            </div>
            <button type="submit" class="btn btn-primary">
                Login
            </button>
        </form>
        <div class="col-3 login">
            Nuevo en Dogcom?
            <a href="singup.php" style="text-decoration: none;">Create una cuenta</a>
        </div>
    </div>

<?php

    require_once("c:/xampp/htdocs/login/view/head/footer.php");

?>