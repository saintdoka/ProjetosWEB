<?php
// $server='localhost';
// $user='rmecgbxe_exemplo';
// $pass='@senhaforte';
// $bd ='rmecgbxe_exemplo';

$server='localhost';
$user='root';
$pass='usbw';
$bd ='exemplo';

$conexao = new mysqli($server,$user,$pass,$bd);
if (!$conexao) {
    echo "Erro ao conectar: ".$conexao->error;
}

function alert($msg){
    echo '<script>Alert(".'$msg'.");</script>';
}

function vai($url){
    echo '<script>window.location=".'$url'.";</script>'>;
}