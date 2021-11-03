<meta CHATSET ="UTF-8"> 
<form method="POST">
    Digite seu NICK:
    <input type="text" name="nick">
    <br>
    <button>Entrar ></button>
</form>

<?php 
session_start();
    if($_POST){
        $nick = $_POST['nick'];
        $_SESSION['nick'] = $nick;
        header('location: chat.php');
        
    }
?>