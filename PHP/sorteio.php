<?php
    include_once "conect.php";
    echo "<button><a href = 'lista.php'> LISTA DO CADASTRO</a></button><br>";

        $weights = ['Pedro' => 2,  "Sob" => 1, "Mateus" => 4, "Dandan" => 3];

        $max = array_sum($weights);
        $sortIndex = rand(1, $max);
        $sort = null;
        $offset = 0;

        foreach ($weights as $key => $value) {
            $offset += $value;
            if ($sortIndex <= $offset) {
                echo "O vencedor é: ";
                $sort = $key;
                break;
            }
        }

        echo $sort;
?>