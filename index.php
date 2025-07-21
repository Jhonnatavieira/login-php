<!DOCTYPE html>
<html lang="pt-br">
 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login with php</title>
 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
 
</head>
 
<body>
    <div class="container">
        <div class="row justify-content-center align-items-center mt-5">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header text-white" style="background-color:rgba(0, 37, 138, 1);">
                        <!--  -->
                        <h4 class="mb-0">Login</h4>
                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                            <div class="mb-3">
                                <label for="email" class="form-label">Usuario</label>
                                <input type="text" class="form-control" id="email" name="txtUser" placeholder="Coloque seu email aqui...">
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Senha</label>
                                <input type="password" class="form-control" id="password" name="txtSenha" placeholder="Senha...">
                            </div>
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="rememberMe">
                                <label class="form-check-label" for="rememberMe">Remember me</label>
                            </div>
                            <button formaction="login.php" class="btn" style="background-color:rgba(0, 37, 138, 1); color: white;">Login</button>
 
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center mt-2">
            <div class="col-md-6">
                <div class="text-center">
                    <?php 
                    session_start();
                    if (isset($_SESSION['login_error'])) {
                        echo "<div class='alert alert-danger'>" . $_SESSION['login_error'] . "</div>";
                        unset($_SESSION['login_error']);
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
 
</body>
 
</html>