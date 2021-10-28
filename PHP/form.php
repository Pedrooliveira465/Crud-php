
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href="style.css">
    <title>CADASTRO</title>
</head>
<body class = "corpo">
<!--Cabeça-->
    <header>
        <div>
            <h1 class="title">PEDRO PLAYTSHAIONS</h1>
        </div>
    </header>
<!--Formulário-->
<form action="cadastro.php" method="POST" id="form">
<div class="form">
        <h2>PS5 DE GRAÇA</h2>
        <P>GARANTA JÁ SEU PS5 FAZENDO O SEU CADASTRO E DIGITANDO UM NÚMERO PARA SER SORTEADO!!!</P>
        <input type = "hidden" name = "id">
        Nome:
        <input type="text" name="nome" id= "nome" placeholder = "Pedro Neto Marques">
        <br>
        Digite um número de 1 a 4:
        <input type = "text" name = "email" id = "email" placeholder = "4">
        <br>
        <input type = "submit" value = "Salvar" onclick = "" id = "clicou">
    </div>
</form>
    <script>
        document.getElementById("clicou").onclick = function clicar(){
    alert("Cadastro feito com sucesso!")
}
    </script>
</body>
</html>