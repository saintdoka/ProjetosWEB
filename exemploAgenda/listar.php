<meta charset="UTF-8">
<?php
    //arquivo de conexão
    include('conexao.php');
    //comando a ser executado
    $sql = 'SELECT * FROM agenda';
    //envia o comando para o mysql executar e armazena o retorno
    $resultado = $conn->query($sql);
    //percorrer os registros 
?>
    <table>
        <thread>
            <tr>
                <td>Cód</td>
                <td>Nome</td>
                <td>Telefone</td>
                <td></td>
            </tr>
        </thread>
    
        <tbody>
        <?php
            while ($linha = $resultado->fetch_object()){
                echo '<tr>
                    <td>'.$linha->cd.'</td>
                    <td>'.$linha->nome.'</td>
                    <td>'.$linha->telefone.'</td>
                    <td></td>
                    </tr>'
                ;
            }
        ?>
        </tbody>
    </table>