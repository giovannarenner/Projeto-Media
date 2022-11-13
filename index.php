<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="./css/style.css">
    <title>Média</title>
</head>
<body>
        <h1>Cálculo de Média</h1>
  <h2>Digite os valores!</h1>
    </div>
<form  method="POST">
            <p class="input1">
             Insira o primeiro valor: <input class="inputResposta" type="number" name="valor1" />
            </p>
            <p class="input1">
             Insira o segundo valor: <input class="inputResposta" type="number" name="valor2" />
            </p>
            <p class="input1">
            Insira o terceiro valor:  <input class="inputResposta" type="number" name="valor3" />
            </p>
        <button class="resposta">Calcular</button> <br>
        
        <?php
      if(isset($_POST['valor1']) || isset($_POST['valor2']) || isset($_POST['valor3'])){

        $valor1 = $_POST['valor1'];
        $valor2 = $_POST['valor2'];
        $valor3 = $_POST['valor3'];
        $media = ($valor1 + $valor2 + $valor3)/3;
        
        echo "<p> A média dos valores é: $media </p>";
      }


         ?>
        </form>
        </div>
</body>
</html>