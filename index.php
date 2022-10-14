<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<title>Cadastro</title>
	
	<!-- Código para icone de página -->
	<link rel="icon" type="image/png" href="img/icone_sra.png"> 

<!-- Importação do BootStrap - CSS e JavaScript -->
  <link href="css_js/bootstrap-4.1.3/css/bootstrap.min.css" rel="stylesheet">
  <script src="css_js/bootstrap-4.1.3/js/bootstrap.min.js"></script>

<script>
function validaCPF($cpf) {

  var cpf= document.getElementById("cpf");
 
    // Extrai somente os números
    $cpf = preg_replace( '/[^0-9]/is', '', $cpf );
     
    // Verifica se foi informado todos os digitos corretamente
    if (strlen($cpf) != 11) {
        return false;
    }

    // Verifica se foi informada uma sequência de digitos repetidos. Ex: 111.111.111-11
    if (preg_match('/(\d)\1{10}/', $cpf)) {
        return false;
    }

    // Faz o calculo para validar o CPF
    for ($t = 9; $t < 11; $t++) {
        for ($d = 0, $c = 0; $c < $t; $c++) {
            $d += $cpf[$c] * (($t + 1) - $c);
        }
        $d = ((10 * $d) % 11) % 10;
        if ($cpf[$c] != $d) {
            return false;
        }
    }
    return true;
	
	
</script>


</head>
<body style="background: #000;">
	<header>
		<div class="alert alert-success" role="alert" style="margin: 0; text-align:center;">
			<h1 align="center">Formulário para Cadastro</h1>
		<h3>Cadastrar</h3>
		</div>
</header>

<form method="POST" action="validar_usuario.php" 
name="form_login" class="alert alert-secondary" role="alert" 
style="position: relative; margin: auto; width: 400px; text-align: center;
 border-radius: 0px 0px 100px 100px;">
		
			<small>Nome</small><br>
		<input type="text" name="nome" id="nome" autofocus="" required> <br>
			<small>Sobrenome</small><br>
		<input type="text" name="sobrenome" id="sobrenome" required> <br> 
		<small>Data de Nascimento</small><br>
		<input type="date" name="data_nascimento"  id="data_nascimento" required> <br> 
		<small>Celular</small><br>
		<input type="number" name="celular" id="celular" required> <br> 
		<small>E-mail</small><br>
		<input type="email" name="email" id="email" required> <br> 
		<small>CPF</small><br>
		<input type="text" name="cpf" id="cpf"  required> <br> 
		<small>CEP</small><br>
		<input type="text" name="cep" id="cep" required> <br> 
		<small>Estado</small><br>
		<select id="estado" name="estado" required>
			<option value="AC">Acre</option>
			<option value="AL">Alagoas</option>
			<option value="AP">Amapá</option>
			<option value="AM">Amazonas</option>
			<option value="BA">Bahia</option>
			<option value="CE">Ceará</option>
			<option value="DF">Distrito Federal</option>
			<option value="ES">Espírito Santo</option>
			<option value="GO">Goiás</option>
			<option value="MA">Maranhão</option>
			<option value="MT">Mato Grosso</option>
			<option value="MS">Mato Grosso do Sul</option>
			<option value="MG">Minas Gerais</option>
			<option value="PA">Pará</option>
			<option value="PB">Paraíba</option>
			<option value="PR">Paraná</option>
			<option value="PE">Pernambuco</option>
			<option value="PI">Piauí</option>
			<option value="RJ">Rio de Janeiro</option>
			<option value="RN">Rio Grande do Norte</option>
			<option value="RS">Rio Grande do Sul</option>
			<option value="RO">Rondônia</option>
			<option value="RR">Roraima</option>
			<option value="SC">Santa Catarina</option>
			<option value="SP">São Paulo</option>
			<option value="SE">Sergipe</option>
			<option value="TO">Tocantins</option>
		</select>
		<br>
		<small>Cidade</small><br>
		<input type="text" name="cidade" id="cidade" required> <br> 
		<small>Logradouro</small><br>
		<input type="text" name="logradouro" id="logradouro" required> <br> 
		<small>Número</small><br>
		<input type="text" name="numero" id="numero" required> <br> 
		<br>
		<input type="submit" value="Cadastrar" name="submit">	
		<input type="reset" value="Limpar">	
            <br> <br>

<small id="txt_status_register" class="alert alert-danger" role="alert" 
style="display: none; width: 300px; position: relative; margin: auto; margin: 20px; ">
</small>

</form>


<?php

if($_GET)
{
	$situacao_usuario_retorno = $_GET['x'];

if($situacao_usuario_retorno == 1)
	{  
	echo "<script> 
	document.getElementById('txt_status_register').innerHTML = 'Erro nos dados do Cadastro';			
	document.getElementById('txt_status_register').style.display = 'block';
	</script>";	
	

	
	}
	

	
	}
?>


</body>
</html>
