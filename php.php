

<?php

function saque($valor)
{
    $nota100 = 0;
    $nota50 = 0;
    $nota20 = 0;
    $nota10 = 0;
    $quantia = $valor;

    if ($valor % 10 == 0) { //Valor recebido tem que ser divisor de 10

        /*A nota maior para o saque e 100, verifica se o valor e maior que 100, se sim, entao quantas notas podem chegar ao valor, se o valor corresponder inteiro, termina a verificacao,se nao ,qunatas notas pode chegar proximo ao valor, incia a mesma logica na proxima cedula disponivel*/
        if ($valor >= 100) {
            if ($valor % 100 == 0) { //Se o saque corresponder apenas com a nota 
                $nota100 = $valor / 100; //quantas notas para chegar ao valor
                $valor = 0; //o valor ja foi correspondido com a cedula 
            } else {
                $int = $valor / 100; //quantas cedulas correspondente para chegar ao valor proximo
                $nota100 = intval($int); // intval deixa o valor inteiro ignorando apos a virgula
                $valor = $valor - ($nota100 * 100); //quantia que falta para as proximas cedulas 
            }
        }
        if ($valor >= 50) {
            if ($valor % 50 == 0) {
                $nota50 = $valor / 50;
                $valor = 0;
            } else {
                $int = $valor / 50;
                $nota50 = intval($int);
                $valor = $valor - ($nota50 * 50);
            }
        }
        if ($valor >= 20) {
            if ($valor % 20 == 0) {
                $nota20 = $valor / 20;
                $valor = 0;
            } else {
                $int = $valor / 20;
                $nota20 = intval($int);
                $valor = $valor - ($nota20 * 20);
            }
        }
        if ($valor >= 10) {
            if ($valor % 10 == 0) {
                $nota10 = $valor / 10;
            } else {
                $int = $valor / 10;
                $nota10 = intval($int);
                $valor = $valor - ($nota10 * 10);
            }
        }
        //mensagem padrao
        $print = "";
        //imprime a quantia e quais notas foram utilizadas
        if ($nota100) { //imprime so as notas utilizadas
            $print .= " $nota100 nota de R$ 100,00<br>";
        }
        if ($nota50) {
            $print .= " $nota50 nota de R$ 50,00<br>";
        }
        if ($nota20) {
            $print .= " $nota20 nota de R$ 20,00<br>";
        }
        if ($nota10) {
            $print .= " $nota10 nota de R$ 10,00<br>";
        }
        return  $print; //retorna as cedulas para o saque

    } else {
        return "O caixa não possui cedulas para esse valor"; //Em caso do valor nao for divisor de 10
    }
}

if (!isset($_POST['saque'])) {
    $_POST['saque'] = null;
}

?>
