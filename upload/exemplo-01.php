<!--Formulario para upload de arqivo-->

 <form method="post" enctype="multipart/form-data">
    <<input class="form-control" type="file" name="fileUpload">
    <button type="submit">Send</button>
</form>

<?php

//script para fazer upload de arq com php

if ($_SERVER["REQUEST_METHOD"] == "POST") { // verifica a variável global $_SERVER e o metodo de envio
    
    $file = $_FILES["fileUpload"]; //carrega o form fileUpload

    if ($file["error"]){ // verifica se houve erro

        throw new Exception("Error: " .$file["error"]); // lança excessao com o erro
        
    }

    $dirUloads = "uploads"; // diretorio que vai guardar o arquivo

    if (!is_dir($dirUloads)){ // verifica se é um diretorio
        
        mkdir($dirUloads); // cria o diretorio
    }

    // funçao que move o arq do diretorio temporario para o definitivo
    if (move_uploaded_file($file["tmp_name"], $dirUloads . DIRECTORY_SEPARATOR . $file["name"])){

        echo "Upload realizado com sucesso!!";

    } else {

        throw new Exception("Nao foi possivel realizar o upload!!");
        
    }
}


