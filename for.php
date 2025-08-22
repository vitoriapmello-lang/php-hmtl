<?php
    $frutas = ["maçã", "banana", "laranja"];
    echo $frutas[0]; // maçã

    for ($i = 0 ; $i < count ($frutas); $i++){
        echo "frutas ".$i+1 . " : ".$frutas[$i] . "<br>";
}
?>