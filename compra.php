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
                                                                    echo "Preencha todos os campos corretamente";
                                                                }
                                                            }
                                                            if (isset($_POST['btnCredito'])) {
                                                                try {
                                                                    $total = $valorUnitario * $quantidade;
                                                                    $juros = ($total - 25) / 100;
                                                                    $total = $total + $juros;
                                                                    echo "Nome do produto: " . "<span>$produto</span><br>";
                                                                    echo "Valor unitario: " . "<span>$valorUnitario</span><br>";
                                                                    echo "Quantidade: " . "<span>$quantidade</span><br>";
                                                                    echo "Total a pagar: " . "<span>$total</span>";
                                                                } catch (\Throwable $e) {
                                                                    echo "Preencha todos os campos corretamente";
                                                                }
                                                            }
                                                            if (isset($_POST['btnPix'])) {
                                                                try {
                                                                    $total = $valorUnitario * $quantidade;
                                                                    $desconto = ($total - 5) / 100;
                                                                    $total = $total - $desconto;
                                                                    echo "Nome do produto: " . "<span>$produto</span><br>";
                                                                    echo "Valor unitario: " . "<span>$valorUnitario</span><br>";
                                                                    echo "Quantidade: " . "<span>$quantidade</span><br>";
                                                                    echo "Total a pagar: " . "<span>$total</span>";
                                                                } catch (\Throwable $e) {
                                                                    echo "Preencha todos os campos corretamente";
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