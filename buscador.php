<?php
// Leer el contenido del archivo data-1.json
$json = file_get_contents('data-1.json');

// Convertir los datos JSON en un objeto PHP
$data = json_decode($json);
// Acceder a los registros de bienes raíces
foreach ($data as $property) {
$id = $property->Id;
$direccion = $property->Direccion;
$telefono = $property->Telefono;
$codigo = $property->Codigo_Postal;
$tipo= $property->Tipo;
$precio= $property->Precio;

echo '
<div style="  border: white 2px solid; margin: 20px; background: #73C2FB;">
<img src="img/home.jpg" alt="image" width="40%">
<div style="display: inline-block; vertical-align: top;">
    <h4>'.$tipo.'</h4>
    <p>Direccion: '.$direccion.'</p>
    <p>telefono: '.$telefono.'</p>
    <p>Código postal: '.$codigo.'</p>
    <p>Precio: '.$precio.'</p>
</div>
</div>
';
}
?>