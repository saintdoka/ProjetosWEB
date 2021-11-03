<meta charset="UTF-8">
<link rel="stylesheet" href="styles.css">

<div class="formulario">
    <form method="POST" class="content">
        <p class="label">nome:</p>
        <input type="text" name="nome" class="textbox">
        <br>
        <p class="label">telefone:</p>
        <input type="text" name="telefone" class="textbox">
        <br>
        <button>Cadastrar</button>
        <button type="reset">Limpar</button>
        <input type="button" name="listar" value="listar"> 
    </form>
</div>


<?php
    include('conexao.php');
    
    if ($_POST) {
        $nome = $_POST['nome'];
        $telefone = $_POST['telefone'];
        $sql = 'INSERT INTO agenda VALUES(NULL,"'.$nome.'","'.$telefone.'")';
        
        $resultado = $conn->query($sql);
        if ($resultado){
            echo"Cadastrado com sucesso";
        }else {
            echo "Erro ao cadastrar: ".$conn->error;
        }
    }

?>