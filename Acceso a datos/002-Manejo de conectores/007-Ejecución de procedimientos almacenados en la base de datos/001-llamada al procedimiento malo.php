<?php
$mysqli = mysqli_connect("localhost", "crimson", "crimson", "crimson"); // Establezco una conexión a la base de datos MySQL utilizando las credenciales: servidor, usuario, contraseña y nombre de la base de datos

$query = "CALL SeleccionaClientesMalo();"; // Defino una consulta SQL que llama a un procedimiento almacenado llamado 'SeleccionaClientesMalo'

$result = mysqli_query($mysqli, $query); // Ejecuto la consulta en la base de datos y almaceno el resultado en la variable $result

while ($row = mysqli_fetch_row($result)) {
    // Inicio un bucle que recorre cada fila del resultado de la consulta
    var_dump($row); // Muestra la estructura y el contenido de la fila actual en un formato legible
}
?>
