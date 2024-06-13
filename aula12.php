<?php
    $nota1=$_POST ['nota1'];
    $nota2=$_POST ['nota2'];
    echo "A sua nota P1 foi = $nota1";
    echo "<br>";
    echo "A sua nota P2 foi = $nota2";
    $media=(floatval($nota1)+floatval($nota2))/2;
    echo"<br>";
    echo"A media foi: $media";
    echo"<br>";
    if ($media>=6)
    {
        echo "Aprovado";
    }
    else
    {
        echo "Reprovado";
    }
 ?>
