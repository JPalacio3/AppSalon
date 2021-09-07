<?php
function obtenerServicios(): array {
    try {
        //IMPORTAR LA CONEXIÓN:

        require 'databases.php';

        // ESCRIBIR EL CÓDIGO SQL:

        $sql = 'SELECT * FROM servicios;';
        $consulta = mysqli_query($db, $sql);

// ARREGLO VACIO PARA GUARDAR LOS DATOS:

$servicios = [];

// CONTADOR PARA RECORRER EL ARREGLO:

$i = 0;



        // OBTENER RESULTADOS:
// echo '<pre>';
// var_dump( mysqli_fetch_assoc(($consulta)));
// echo '</pre>';

while ($row = mysqli_fetch_assoc($consulta)) {
    $servicios[$i]['id'] = $row['id'];
    $servicios[$i]['nombre'] = $row['nombre'];
    $servicios[$i]['precio'] = $row['precio'];


// INCREMENTO DEL CONTADOR:
    $i++;
}

        // RETORNAR LOS DATOS:

        // echo '<pre>';
        // var_dump(($servicios));
        // echo '</pre>';

return $servicios;

}catch(\Throwable $th){
    var_dump($th);
}
}

obtenerServicios();