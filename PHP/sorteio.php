<?php
    include_once "conect.php";

        //echo "O ganhador do PS5 é o número: ";
        //echo random_int(1, 5),"<br>";
        //echo "Veja na lista o vencedor: ";
        //echo "<button><a href = 'lista.php'> LISTA DO CADASTRO</a></button><br>";
        try{
            $consulta = $conexao -> query("SELECT * FROM cadastro");
            echo "<button><a href = 'index.php'>PÁGINA INICIAL</a></button>";
            echo "<button><a href = 'lista.php'>LISTA DO CADASTRO</a></button>";
    
                $consulta = $conexao -> query("SELECT * FROM cadastro");
                    while($linha = $consulta -> fetch(PDO::FETCH_ASSOC)){
                        echo "<br><tr><td>$linha[nome]</td></tr><br>";
                        echo "<tr><td>$linha[email]</td></tr>";

                        
                        
                       
                    }
        }
        catch(PDOException $erro){
            echo "Deu erro" .$erro -> getMessage();
        }
           
?>