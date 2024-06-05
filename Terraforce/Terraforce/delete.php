<?php
include('db.php');

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query = "DELETE FROM escuelas WHERE id = $id";
    $result = mysqli_query ($conn,$query);

    $query1 = "DELETE FROM empresas WHERE id = $id";
    $result1 = mysqli_query ($conn,$query1);

    $query2 = "DELETE FROM voluntarios WHERE id = $id";
    $result2 = mysqli_query ($conn,$query2);

    $query3 = "DELETE FROM asociaciones WHERE id = $id";
    $result3 = mysqli_query ($conn,$query3);

    $query4 = "DELETE FROM estatus WHERE id = $id";
    $result4 = mysqli_query ($conn,$query4);

    $query5 = "DELETE FROM registros WHERE id = $id";
    $result5 = mysqli_query ($conn,$query5);

    $query6 = "DELETE FROM tematicas WHERE id = $id";
    $result6 = mysqli_query ($conn,$query6);

    $query7 = "DELETE FROM voluntarios WHERE id = $id";
    $result7 = mysqli_query ($conn,$query7);


    if(!$result && !$result1&& !$result2&& !$result3&& !$result4&& !$result5&& !$result6&& !$result7){   
        die("Fallo");
    }

    header("location: index.php");
}
?>