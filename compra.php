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
                            <li> <a href="formulario.php" class="nav-link text-white"> <svg class="bi pe-none me-2" width="16" height="16" aria-hidden="true">
                                        <use xlink:href="#speedometer2"></use>
                                    </svg>
                                    Formulario
                                </a> </li>
                            <li> <a href="compra.php" class="nav-link text-white  active"> <svg class="bi pe-none me-2" width="16" height="16" aria-hidden="true">
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
                <div class="col py-3">

                    <main>
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <div class="container">
            <div class="row">
                <div id="conteudo" class="col-12 d-flex justify-content-center align-items-center flex-column gap-3">
                    <div class="w-50">
                        <h3 class="text-center mb-4">Sistema de pagamento</h3>
                        <form action="" method="post">
                            <input type="text" class="form-control" name="txtProduto" id="" placeholder="Nome do produto">
                            <input type="number" class="form-control my-4" name="txtValor" id="" placeholder="Valor do produto">
                            <input type="number" class="form-control" name="txtQuantidade" id="" placeholder="Quantidade do produto">

                            <div class="w-50 d-flex justify-content-center align-items-center gap-3 mt-3">
                                <button formaction="ex02.php" name="btnDebito" name="" class="btn botao">Debito</button>
                                <button formaction="ex02.php" name="btnCredito" class="btn botao">Credito</button>
                                <button formaction="ex02.php" name="btnPix" class="btn botao">Pix</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="container mt-5">
                <div class="row">
                    <div id="conteudo" class="col-12 d-flex justify-content-center align-items-center flex-column gap-3">
                        <div class="w-50">
                            <h3 class="text-center mb-4">Valor a pagar</h3>
                            <?php
                            $produto;
                            $valorUnitario;
                            $quantidade;
                            $total;
                            $pagamento;
                            $juros;
                            $desconto;

                            if ($_POST) {
                                $produto = $_POST['txtProduto'];
                                $valorUnitario = $_POST['txtValor'];
                                $quantidade = $_POST['txtQuantidade'];
                                $pagamento;
                                $total = 0;

                                if (isset($_POST['btnDebito'])) {
                                    try {
                                        $total = $valorUnitario * $quantidade;
                                        echo "Nome do produto: " . "<span>$produto</span><br>";
                                        echo "Valor unitario: " . "<span>$valorUnitario</span><br>";
                                        echo "Quantidade: " . "<span>$quantidade</span><br>";
                                        echo "Total a pagar: " . "<span>$total</span>";
                                    } catch (\Throwable $e) {
                                        echo"Preencha todos os campos corretamente";
                                    }
                                }
                                if (isset($_POST['btnCredito'])) {
                                    try {
                                        $total = $valorUnitario * $quantidade;
                                        $juros = ($total - 25)/100;
                                        $total = $total + $juros;
                                        echo "Nome do produto: " . "<span>$produto</span><br>";
                                        echo "Valor unitario: " . "<span>$valorUnitario</span><br>";
                                        echo "Quantidade: " . "<span>$quantidade</span><br>";
                                        echo "Total a pagar: " . "<span>$total</span>";
                                    } catch (\Throwable $e) {
                                        echo"Preencha todos os campos corretamente";
                                    }
                                }
                                if (isset($_POST['btnPix'])) {
                                    try {
                                        $total = $valorUnitario * $quantidade;
                                        $desconto = ($total - 5)/100;
                                        $total = $total - $desconto;
                                        echo "Nome do produto: " . "<span>$produto</span><br>";
                                        echo "Valor unitario: " . "<span>$valorUnitario</span><br>";
                                        echo "Quantidade: " . "<span>$quantidade</span><br>";
                                        echo "Total a pagar: " . "<span>$total</span>";
                                    } catch (\Throwable $e) {
                                        echo"Preencha todos os campos corretamente";
                                    }
                                }
                            }
                            ?>
                        </div>
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





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>

</body>

</html>