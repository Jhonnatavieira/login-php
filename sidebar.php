
<?php
// Captura o valor da tela atual
$telaAtual = $_GET['tela'] ?? 'dashboard';
?>

<!-- inicio sidebar -->
                <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark vh-100">
                    <div class="d-flex flex-column flex-shrink-0 p-3 text-bg-dark vh-100" style="width: 280px;"> <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none"> <svg class="bi pe-none me-2" width="40" height="32" aria-hidden="true">
                                <use xlink:href="#bootstrap"></use>
                            </svg> <span class="fs-4">Login-PHP</span> </a>
                        <hr>

                        <!-- links da sidebar -->
                        <ul class="nav nav-pills flex-column mb-auto">
                            <li class="nav-item"> <a href="dashboard.php?tela=dashboard" class="nav-link <?php echo $telaAtual === 'dashboard' ? 'active' : 'text-white' ?>"  aria-current="page"> <svg class="bi pe-none me-2" width="16" height="16" aria-hidden="true">
                                        <use xlink:href="#home"></use>
                                    </svg>
                                    Dashboard
                                </a> </li>
                            <li> <a href="dashboard.php?tela=formulario" class="nav-link <?php echo $telaAtual === 'formulario' ?  'active' : 'text-white' ?>"> <svg class="bi pe-none me-2" width="16" height="16" aria-hidden="true">
                                        <use xlink:href="#speedometer2"></use>
                                    </svg>
                                    Formulario
                                </a> </li>
                            <li> <a href="dashboard.php?tela=compra" class="nav-link <?php echo $telaAtual === 'compra' ? 'active' : 'text-white' ?>"> <svg class="bi pe-none me-2" width="16" height="16" aria-hidden="true">
                                        <use xlink:href="#table"></use>
                                    </svg>
                                    Compra de Produto
                                </a> </li>
                        </ul>
                        <hr>

                        <?php 
                        echo"$telaAtual";
                        ?>
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
                <!-- fim da side bar -->