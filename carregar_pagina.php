<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Usuário Cadastrado!</title>

</head>
<body>

    <!-- Carregando páginas do sistema -->
    <iframe name="iframe_carregar_pg" src="paginas/pg_principal.php" frameborder="0"
     style="position: relative; top:-15px; width: 100%; min-height: 600px;" id="frame_carregar_pg"></iframe>
   
     <script>
    // Selecionar o frame
    var meu_frame = document.getElementById("frame_carregar_pg");
    
    //  Ajustar o tamanho do frame no carregamento (onload)
    meu_frame.onload = function(){
        meu_frame.style.height = meu_frame.contentWindow.document.body.scrollHeight + 'px';
    }
    </script>
    
</body>
</html>
