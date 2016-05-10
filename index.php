<?php
//Leer json
$data = file_get_contents("json.html");
$json = json_decode($data,true);
//Generar aleatorio
$count= sizeof($json,0);
$random= mt_rand (0, $count);
//Obtener Nombre gfycat
$mp4name = $json[$random]['gfyName'];
//Redireccionar a la página pública
header("Location: mp4.php?gfy=$mp4name",TRUE,303);
?>
