<?php

include('db.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = "SELECT * FROM escuelas WHERE id=$id";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_array($result);
        $nombre = $row['nombre'];
        $direccion = $row['direccion'];
        $correo = $row['correo'];
        $telefono = $row['telefono'];
    }

    
}

if(isset($_POST['update'])){
    $id=$_GET['id'];
    $nombre=$_POST['nombre'];
    $direccion=$_POST['direccion'];
    $correo=$_POST['correo'];
    $telefono=$_POST['telefono'];

    $query="UPDATE escuelas SET nombre='$nombre', direccion = '$direccion' ,correo ='$correo',telefono ='$telefono' WHERE id ='$id' ";
    mysqli_query($conn,$query);
    header("location: index.php");
}






?>

<?php include("includes/header.php") ?>
<!--Escuelas-->
<div class="container p-4" id="c1">
    <div class="row">
        <div class="col-md-4 mx-auto">
            <div class="card card-body">
                <form action="editescuela.php?id=<?php echo $_GET['id']; ?>" method="post">
                    <div class="form-group">
                        <input type="text" name="nombre" value="<?php echo $nombre; ?>" class="form-control" placeholder="-Nueva escuela-" >
                    </div>
                    <div class="form-group">
                        <textarea name="direccion" rows="2" class="form-control" placeholder="-nueva direccion
                        " ><?php echo $direccion; ?></textarea >
                    </div>
                    <div class="form-group">
                        <textarea name="correo" rows="2" class="form-control" placeholder="-nuevo correo
                        " ><?php echo $correo; ?></textarea >
                    </div>
                    <div class="form-group">
                        <textarea name="telefono" rows="2" class="form-control" placeholder="-nuevo telefono
                        " ><?php echo $telefono; ?></textarea >
                    </div>
                    <button class="btn-success" name="update" >
                        Editar  
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>



<?php include("includes/footer.php") ?>
