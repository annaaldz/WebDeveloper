<?php

	// Iniciar a sessão do PHP
	session_start();

if(isset($_SESSION['usuario_validado']))
    { include("carregar_pagina.php"); }
    else
    {	
        header("Location:index.php?x=1"); 
        session_destroy();
    }

?>
