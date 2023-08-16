<?php
    if(isset($_POST['submit']))
    {
        include_once('conecta.php');

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $whatsapp = $_POST['whatsapp'];

        $result = mysqli_query($conexao, "INSERT INTO clientes(nome,email,whatsapp) VALUES ('$nome','$email','$whatsapp')");
        
        header('Location: formulario.html');
    }
?>