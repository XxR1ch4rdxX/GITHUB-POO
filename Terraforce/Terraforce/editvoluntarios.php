<?php

include('db.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = "SELECT * FROM voluntarios WHERE id=$id";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_array($result);
        $nombres = $row['nombres'];
        $apellidos = $row['apellidos'];
        $escuela_id = $row['escuela_id'];

    }
}

if (isset($_POST['update'])) {
    $id = $_GET['id'];
    $nombres = $_POST['nombres'];
    $apellidos = $_POST['apellidos'];
    $escuela_id = $_POST['escuela_id'];
  

    $query = "UPDATE voluntarios SET nombres='$nombres', apellidos = '$apellidos' ,escuela_id ='$escuela_id' WHERE id ='$id' ";
    mysqli_query($conn, $query);
    header("location: index.php");
}






?>

<?php include("includes/header.php") ?>
<!--empresas-->
<div class="container p-4" id="c1">
    <div class="row">
        <div class="col-md-4 mx-auto">
            <div class="card card-body">
                <form action="editvoluntarios.php?id=<?php echo $_GET['id']; ?>" method="post">
                    <div class="form-group">
                        <input type="text" name="nombres" value="<?php echo $nombres; ?>" class="form-control" placeholder="-Nombres nuevos-">
                    </div>
                    <div class="form-group">
                        <input type="text" name="apellidos" value="<?php echo $apellidos; ?>" class="form-control" placeholder="-apellidos nuevos-">
                    </div>
                    <div class="form-group">
                        <input type="text" name="escuela_id" value="<?php echo $escuela_id; ?>" class="form-control" placeholder="-Id de la escuela-">
                    </div>
                   
                    <button class="btn btn-success" name="update">
                        Editar
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>



<?php include("includes/footer.php") ?>