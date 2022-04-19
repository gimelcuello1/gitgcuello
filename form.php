<?php

use function PHPSTORM_META\map;

$name = $_POST ['nombre'];
$mail = $_POST ['email'];
$mensaje = $_POST['textarea'];

$para = 'gimelcuello@gmail.com';
$asunto = 'Este mail fue enviado desde la web';
mail($para, $asunto, utf8_decode($mensaje));

header('location:mensaje.html');



