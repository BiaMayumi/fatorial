<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>FATORIAL</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" type="text/css" href="main.css" media="screen"/>

</head>
<body>
    <form action='<?php echo $_SERVER["PHP_SELF"]; ?>' method="post">
        <h1>FATORIAL</h1>
        <p>A lenda do livro "O Homem que Calculava" relaciona-se à computação atual por meio do uso de estratégias e algoritmos eficientes na resolução de problemas complexos.</p>
        <p>A história destaca também a velocidade e precisão dos cálculos realizados por Beremiz, que podem ser comparados ao desempenho dos computadores modernos.</p>
        <p>Essa conexão entre a lenda, a matemática e a computação demonstra a importância desses conceitos na resolução de problemas tanto no passado quanto no presente.</p>
        <br>
        <br>
        <label for="numero">Número: </label>
        <input type="number" max="64" name="numero">
        <br>
        <input type="submit"> <input type="reset" value="Reset">
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $numero = $_POST["numero"];
            $fatorial = 1;

            for ($i = 1; $i <= $numero; $i++) {
                $fatorial *= $i;
            }

            echo "<h2>FATORIAL: " . $fatorial . "</h2>";
        }
    ?>
    
</body>
</html>
