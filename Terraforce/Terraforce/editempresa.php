<?php

include('db.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = "SELECT * FROM empresas WHERE id=$id";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_array($result);
        $nombre = $row['nombre'];
        $correo = $row['correo'];
        $telefono = $row['telefono'];
        $direccion = $row['direccion'];
    }
}

if (isset($_POST['update'])) {
    $id = $_GET['id'];
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $telefono = $_POST['telefono'];
    $direccion = $_POST['direccion'];

    $query = "UPDATE empresas SET nombre='$nombre', correo = '$correo' ,telefono ='$telefono',direccion ='$direccion' WHERE id ='$id' ";
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
                <form action="editempresa.php?id=<?php echo $_GET['id']; ?>" method="post">
                    <div class="form-group">
                        <input type="text" name="nombre" value="<?php echo $nombre; ?>" class="form-control" placeholder="-Nombre de la empresa-">
                    </div>
                    <div class="form-group">
                        <input type="text" name="correo" value="<?php echo $correo; ?>" class="form-control" placeholder="-Correo electrónico-">
                    </div>
                    <div class="form-group">
                        <input type="text" name="telefono" value="<?php echo $telefono; ?>" class="form-control" placeholder="-Teléfono-">
                    </div>
                    <div class="form-group">
                        <textarea name="direccion" rows="2" class="form-control" placeholder="-Dirección-"><?php echo $direccion; ?></textarea>
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