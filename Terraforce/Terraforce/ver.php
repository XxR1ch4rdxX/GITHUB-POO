<?php
include('db.php');

if(isset($_GET['tabla'])){
    $tabla = $_GET['tabla'];
    
    // Hacer la consulta según la tabla seleccionada
    $query = "SELECT * FROM $tabla";
    $result = mysqli_query($conn, $query);
    
    // Mostrar los resultados
    if(mysqli_num_rows($result) > 0) {
        echo "<table class='table'>";
        echo "<tr><th>ID</th><th>Nombre</th></tr>";
        while($row = mysqli_fetch_assoc($result)) {
            echo "<tr><td>".$row['id']."</td><td>".$row['nombre']."</td></tr>";
        }
        echo "</table>";
    } else {
        echo "No se encontraron resultados.";
    }
}
?>