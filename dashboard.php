<?php
session_start();

if (!isset($_SESSION['usuario'])) {
    header("Location: index.php");
    exit;
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">


</head>

<body>

    <aside>
        <div class="container-fluid">
            <div class="row">

                <?php
                include_once 'sidebar.php';
                ?>


                <div class="col py-3">

                    <main>
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <?php
                                    if ($_GET['tela'] == 'dashboard') {
                                        include_once 'dashboardContent.php';
                                    } elseif ($_GET['tela'] == 'formulario') {
                                        include_once 'formulario.php';
                                    } elseif ($_GET['tela'] == 'compra') {
                                        include_once 'compra.php';
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </main>


                </div>
            </div>
        </div>
    </aside>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5 text-center w-100" id="exampleModalLabel">Novo cliente</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="nome" name="txtNome" placeholder="Nome do cliente">
                                <input type="text" class="form-control mt-4" id="celular" name="txtCelular" placeholder="Celular do cliente">
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="email" name="txtEmail" placeholder="Email do cliente">
                                <input type="number" class="form-control mt-4" id="idade" name="txtIdade" placeholder="Idade do cliente">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button formaction="formulario.php" class="btn bg-primary" style=" color: white;">Salvar cliente</button>
                </div>
            </div>
        </div>
    </div>


    <!-- Modal 2 -->
    <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel2" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5 text-center w-100" id="exampleModalLabel">Cliente</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="ID">ID</label><br>
                                <span>1</span>
                                <hr>
                                <br>
                                <label for="ID">Nome do cliente: </label><br>
                                <span>Otto</span>
                                <hr>
                            </div>
                            <div class="col-md-6">
                                <label for="">CPF</label><br>
                                <span>123.123.123-12</span>
                                <hr>
                                <br>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button formaction="formulario.php" class="btn bg-primary" style=" color: white;">Salvar cliente</button>
                </div>
            </div>
        </div>
    </div>



    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>

</body>

</html>