<?php
//incluir a conexão na página
include('conexao.php');

if($_POST){
    $nome = $_POST['nome'];
    $autor= $_POST['autor']; 
    $qtd= $_POST['qtd'];
    $editora= $_POST['editora'];
    $pasta = 'capas/';
    $destino = $pasta.$_FILES['capa']['name'];
    //upload da imagem da capa do livro
    if (move_uploaded_file($_FILES['capa']['tmp_name'], $destino)){
        //se der certo o upload, seguimos com o cadastro
        $sql = 'INSERT INTO tb_livro VALUES(NULL,';
        $sql .= '"'.$nome.'",';
        $sql .= '"'.$autor.'",';
        $sql .= $qtd.',';
        $sql .= '"'.$editora.'",';
        $sql .= '"'.$destino.'")';
        //enviar o comando e guardar o retorno
        $resultado = $conexao->query($sql);
        if ($resultado) {
            alert("Livro cadastrado com Sucesso!");
            vai("cadastro.html");
        }else {
            alert("Erro ao cadastrar o livro: ".$conexao->error);
        }
    }else {
        alert("Erro ao enviar capa! tente novamente");
    }
}
?>