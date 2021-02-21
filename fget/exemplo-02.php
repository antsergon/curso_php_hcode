<?php



$filename = "logo.png";

$base64 = base64_encode(file_get_contents($filename));

$fileinfo = new finfo(FILEINFO_MIME_TYPE);// classe que pega o tipo de arquivo "mimetype"

$mimetype = $fileinfo->file($filename); // pega o tipo

$base64encode = "data:" . $mimetype . ";base64, " . $base64;//converte a imagem em texto na base 64 "binario"

?>

<a href="<?=$base64encode?>" target="_blank">Link para a imagem</a>
<img src="<?=$base64encode?>" alt="logo hcode"> 