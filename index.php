<?php

    /**
     * DESAFIO #30 @nextgencoder
     * 
     */


     if (!empty($_POST)):
        $palavra = $_POST['palavra'];
        $reverse = strrev($palavra);

        $palavra_split = str_split($palavra);
        $reverse_split = str_split($reverse);
        $length  = strlen($palavra);

        $match = 0;
        $mapa  = '';

        for ($c = 0; $c < $length; $c++):
            if ($reverse_split[$c] == $palavra_split[$c]):
                $char = '*';
                $match += 1;
            else:
                $char = "[{$reverse_split[$c]} -> {$palavra_split[$c]}]";
            endif;
            $mapa .= $char . " ";
        endfor;

        if ($length == $match):
            echo "PALINDROME ({$match}/{$length})";
        else:
            if ($length - $match > 2 || $length <= 0):
                echo "NÃO";
            else:
                echo "PARCIAL ({$match}/{$length})";
            endif;
        endif;

        echo "<table cellspace='5'>";
        echo "<tr><td>Palavra</td><td>{$palavra}</td></tr>";
        echo "<tr><td>Reverso</td><td>{$reverse}</td></tr>";
        echo "<tr><td>Mapa</td><td>{$mapa}</td></tr>";
        echo "</table>";
     endif;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Palindrome</title>
</head>
<body>

     <form action="" method="post">
        <input type="text" name="palavra">
        <button type="submit">Enviar</button>
     </form>
    
</body>
</html>