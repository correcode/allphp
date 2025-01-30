<?php
echo "Digite o valor do saque (entre R$10 e R$600): ";
$valor = intval(trim(fgets(STDIN)));

if ($valor < 10 || $valor > 600) {
        echo "Valor inválido! O saque deve estar entre R$10 e R$600.\n";

} else {
        $notas100 = 0;
            $notas50 = 0;
            $notas20 = 0;
                $notas10 = 0;
                $notas5 = 0;

                if ($valor >= 100) {
                            $notas100 = intdiv($valor, 100);
                                    $valor %= 100;

                }
                if ($valor >= 50) {
                            $notas50 = intdiv($valor, 50);
                                    $valor %= 50;

                }
                if ($valor >= 20) {
                            $notas20 = intdiv($valor, 20);
                                    $valor %= 20;

                }
                if ($valor >= 10) {
                            $notas10 = intdiv($valor, 10);
                                    $valor %= 10;

                }
                if ($valor >= 5) {
                            $notas5 = intdiv($valor, 5);
                                    $valor %= 5;

                }

                    echo "Notas entregues:\n";
                    if ($notas100 > 0) echo "$notas100 nota(s) de R$100\n";
                        if ($notas50 > 0) echo "$notas50 nota(s) de R$50\n";
                        if ($notas20 > 0) echo "$notas20 nota(s) de R$20\n";
                            if ($notas10 > 0) echo "$notas10 nota(s) de R$10\n";
                            if ($notas5 > 0) echo "$notas5 nota(s) de R$5\n";

}
?>
