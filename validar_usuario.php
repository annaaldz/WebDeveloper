<?php

// Chamada de conexão com servidor e BD MySQL
include("conexao_bd_mysql/conexao_bd_mysql.php");

    // Recebendo dados via método POST

    if(isset($_POST)){

    $nome_dg = $_POST['nome'];
    $sobrenome_dg = $_POST['sobrenome'];
    $data_nascimento_dg = $_POST['data_nascimento'];
    $celular_dg = $_POST['celular'];
    $email_dg = $_POST['email'];
    $cpf_dg = $_POST['cpf'];
    $cep_dg = $_POST['cep'];
    $estado_dg = $_POST['estado'];
    $cidade_dg = $_POST['cidade'];
    $logradouro_dg = $_POST['logradouro'];
    $numero_dg = $_POST['numero'];
    
    }

    $user = "root"; 
    $password = ""; 
    $database = "form_web"; 

    # O hostname deve ser sempre localhost 
    $hostname = "localhost"; 

    mysql_connect( $hostname, $user, $password ) or die( ' Erro na conexão ' ); 
    
    # Seleciona o banco de dados 
    mysql_select_db( $database ) or die( 'Erro na seleção do banco' );

    # Executa a query desejada 
    $query = "SELECT email, cpf FROM tb_dados"; 
    $result_query = mysql_query( $query ) or die(' Erro na query:' . $query . ' ' . mysql_error() ); 

    # Exibe os registros na tela 
    while ($row = mysql_fetch_array( $result_query )) 
{ 
      print $row[nome] . " -- " . $row[sobrenome] . " -- " . $row[data_nascimento] . " -- " . $row[celular] . " -- " . $row[email] . " -- " . $row[cpf] . " -- " . $row[cep] . " -- " . $row[estado] . " -- " . $row[cidade] . " -- " . $row[logradouro] . " -- " . $row[numero]; 
}

    $sql = "INSERT INTO tb_alunos (nome, sobrenome, data_nascimento, celular, email, cpf, cep, estado, cidade, logradouro, numero) VALUES (?,?,?,?,?,?,?,?,?,?,?)";
    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);

?>