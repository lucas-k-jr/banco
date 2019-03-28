<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title> Conta Corrente </title>
    </head>
    <body>
    <?php
        if(empty($_GET)){
            echo '
            <form action="Cadastro.php" method="GET">
                <fieldset>
                    <legend><b> Cadastro de Conta </b></legend>
                    
                    <input type="radio" id="conta" name="conta" value="poupanca" /> Poupança
                    <input type="radio" id="conta" name="conta" value="corrente" /> Corrente
                    <br/><br/>
                    <input type="submit" value="Próximo">
                </fieldset>
            </form>';
        }else{
            $conta = $_GET["conta"];

            if($conta == "poupanca"){
                echo '
                <form action="insere_cadastro.php" method="POST">
                    <fieldset>
                        <legend><b> Cadastro de Conta '.$conta.' </b></legend>
                        <input type="text" id="cliente" name="cliente" placeholder="Cliente...">
                        <br/><br/>
                        <input type="number" id="numConta" name="numConta" step="1" placeholder="Num. Conta...">
                        <br/><br/>
                        <input type="date" id="dataAbertura" name="dataAbertura" placeholder="Data Abertura...">
                        <br/><br/>
                        <input type="text" id="saldoInicial" name="saldoInicial" step="0.1" placeholder="Saldo  Inicial...">
                        <br/><br/>
                        <input type="text" id="taxaRendimento" name="taxaRendimento" step="0.1" placeholder="Taxa Rendimento %...">
                        <br/><br/>
                        <input type="hidden" name="conta" value="'.$conta.'" />
                        <input type="submit" value="Próximo">
                    </fieldset>
                </form>';
            }else{
                echo '
                <form action="insere_cadastro.php" method="POST">
                    <fieldset>
                        <legend><b> Cadastro de Conta '.$conta.' </b></legend>
                        <input type="text" id="cliente" name="cliente" placeholder="Cliente...">
                        <br/><br/>
                        <input type="number" id="numConta" name="numConta" step="1" placeholder="Num. Conta...">
                        <br/><br/>
                        <input type="date" id="dataAbertura" name="dataAbertura" placeholder="Data Abertura...">
                        <br/><br/>
                        <input type="text" id="saldoInicial" name="saldoInicial" step="0.1" placeholder="Saldo  Inicial...">
                        <br/><br/>
                        <input type="text" id="taxaManutencao" name="taxaManutencao" step="0.1" placeholder="Taxa Manutenção...">
                        <br/><br/>
                        <input type="text" id="taxaOperacao" name="taxaOperacao" step="0.1" placeholder="Taxa Operação...">
                        <br/><br/>
                        <input type="hidden" name="conta" value="'.$conta.'" />
                        <input type="submit" value="Próximo">
                    </fieldset>
                </form>';
            }
        }
    ?>
    </body>
</html>