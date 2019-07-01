<?php session_start(); 

  
    if (array_key_exists('nome', $_GET)) {
        $_SESSION['lista_tarefas'][] = $_GET['nome'];
    }

    if (array_key_exists('lista_tarefas', $_SESSION)) {
        $lista_tarefas = $_SESSION['lista_tarefas'];
    } else {
        $lista_tarefas = [];
    }

    include "template.php"
?>

        
