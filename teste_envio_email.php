<?php

$contas = [
    ['alexandre@gmail.com' => '12345']

];


// for ($i = 0 ; $i < count($contas); $i++ ) {
 //   print

//}

foreach($contas as $chave => $valor) {
    var_dump($chave);
    var_dump($valor);
}

?>