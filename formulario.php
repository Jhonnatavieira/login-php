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
                <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark vh-100">
                    <div class="d-flex flex-column flex-shrink-0 p-3 text-bg-dark vh-100" style="width: 280px;"> <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none"> <svg class="bi pe-none me-2" width="40" height="32" aria-hidden="true">
                                <use xlink:href="#bootstrap"></use>
                            </svg> <span class="fs-4">Login-PHP</span> </a>
                        <hr>

                        <!-- links da sidebar -->
                        <ul class="nav nav-pills flex-column mb-auto">
                            <li class="nav-item"> <a href="dashboard.php" class="nav-link text-white" aria-current="page"> <svg class="bi pe-none me-2" width="16" height="16" aria-hidden="true">
                                        <use xlink:href="#home"></use>
                                    </svg>
                                    Dashboard
                                </a> </li>
                            <li> <a href="formulario.php" class="nav-link text-white active"> <svg class="bi pe-none me-2" width="16" height="16" aria-hidden="true">
                                        <use xlink:href="#speedometer2"></use>
                                    </svg>
                                    Formulario
                                </a> </li>
                            <li> <a href="compra.php" class="nav-link text-white"> <svg class="bi pe-none me-2" width="16" height="16" aria-hidden="true">
                                        <use xlink:href="#table"></use>
                                    </svg>
                                    Compra de Produto
                                </a> </li>
                        </ul>
                        <hr>

                        <!-- botao do usuario -->
                        <div class="dropdown"> <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"> <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2"> <strong>User</strong> </a>
                            <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                                <li><a class="dropdown-item" href="#">New project...</a></li>
                                <li><a class="dropdown-item" href="#">Settings</a></li>
                                <li><a class="dropdown-item" href="#">Profile</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a href="logout.php" class="dropdown-item">Sair</a>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- interface -->
                <div class="col p-0">

                    <main>
                        <div class="container-fluid bg-secondary p-2">
                            <div class="row">
                                <div class="col">
                                    <h1 class="text-center text-white">Cadastro de Clientes</h1>
                                </div>
                            </div>
                        </div>

                        <div class="container mt-3">
                            <div class="row">
                                <div class="col">
                                    <div class="card w-100">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col">
                                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                        Cadastrar cliente
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="row mt-3">
                                                <div class="col">
                                                    <table class="table">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col">Nome</th>
                                                                <th scope="col">Contato</th>
                                                                <th scope="col">Email</th>
                                                                <th scope="col">Idade</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <th scope="row">1</th>
                                                                <td>Mark</td>
                                                                <td>Otto</td>
                                                                <td>@mdo</td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">2</th>
                                                                <td>Jacob</td>
                                                                <td>Thornton</td>
                                                                <td>@fat</td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">3</th>
                                                                <td>John</td>
                                                                <td>Doe</td>
                                                                <td>@social</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>

</html>