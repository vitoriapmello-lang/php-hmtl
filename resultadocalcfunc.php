<?php
/*
function media() {
    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];
    $n3 = $_POST['n3'];
    
    $media = ($n1 + $n2 + $n3) /3;
    echo "sua media é: " . $media; 
}

media($n1,$n2,$n3)
*/

function media($n1,$n2,$n3) {
    return ($n1 + $n2 + $n3) /3;
    }

    if ($_SERVER["REQUEST METHOD"] == "POST") {
        $n1 = $_REQUEST['n1'];
        $n2 = $_POST['n2'];
        $n3 = $_POST['n3']; 

        $resultado = media($n1,$n2,$n3);

        echo "<h2>resultado da media</h2>";
        echo "os numeros digitados foram: $n1, $n2 e $n3 <br>";
        echo "a media é: <strong>" . 
        number_format($resultado, 2, ',', '.') . "</strong>";
    } else {
        echo "nenhum valor enviado";
    }
    
?>