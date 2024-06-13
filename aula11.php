<?php
    $login=$_POST ['login'];
    $senha=$_POST ['senha'];

    if (empty($login) OR empty ($senha))
    {
        echo "Você deve preencher o login e senha!";
        exit;
    }
    else
    {
       echo "Você digitou o login = $login";
       echo "<br>";
       echo "Você digitou a senha = $senha";
    }

 ?>



