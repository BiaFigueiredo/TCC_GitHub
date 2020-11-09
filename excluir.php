<?php
    session_start();
    include('conexao.php');
    $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
    if(!empty($id)){
        $result_usuario = "DELETE * FROM usuarios WHERE id='$id'";
        $resultado_usuario = mysqli_query($conexao, $result_usuario);
        if(mysqli_affected_rows($conexao)){
            $_SESSION['apagado'] = true;
            header("Location: index.php");
        }else{
            
            $_SESSION['erro'] = true;
            header("Location: perfil.php");
        }
    }
?>