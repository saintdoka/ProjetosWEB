<meta charset="UTF-8">
<?php
    $servidor= 'localhost';
    $usuario= 'root';
    $senha= 'usbw';
    $banco= 'exemplo';

//instanciar um objeto de conexão

$conn = new mysqli($servidor,$usuario,$senha,$banco);

if(!$conn){
    echo "Erro ao conectar: ".$conn->error;
}


