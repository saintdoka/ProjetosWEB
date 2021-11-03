<meta CHATSET ="UTF-8"> 
<?php 
    session_start();
    if (!isset($_SESSION['nick'])){
        header('location: index.php');   
    }

    $conexao = new mysqli("localhost","root","usbw","chat");

?>

<style>
    .chat{
        width:80vw;
        height:70vh;
        margin-top:5vh;
        margin-left:10vw;
        border:1px solid red;
        overflow: scroll;
    }
    .meu{
        color:red;
    }
</style>

<script src="jquery-3.6.0.min.js"></script>
<script>
    function buscarMsgs(){
        $.ajax({
            url: 'msg.php', //pagina alvo
            data: null, // informações a enviar
            type: 'GET', // método utilizado GET/POST
            success: function(retorno){
                //captura do retorno da página
                $('.chat').html(retorno);
            }
        });
    }

    setInterval(function(){
        buscarMsgs();
    },2000);

    $(document).on('submit','#enviar',function(e){
        
        $.ajax({
            url:'msg.php',
            data: $(this).serialize(),
            type: 'POST',
            success: function(){
                $('#msg').val('');
            }
        });
        e.preventDefault();
    });
</script>


<div class="chat"></div>
<form id="enviar">
    Mensagem:
    <textarea name="msg" id="msg"></textarea>
    <button>Enviar</button>
</form>

