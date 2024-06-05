<?php

include('db.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = "SELECT * FROM registros WHERE id=$id";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_array($result);
        $voluntarios_id = $row['voluntarios_id'];
        $convocatoria_id = $row['convocatoria_id'];


    }
}

if (isset($_POST['update'])) {
    $id = $_GET['id'];
    $voluntarios_id = $_POST['voluntarios_id'];
    $convocatoria_id = $_POST['convocatoria_id'];

  

    $query = "UPDATE registros SET voluntarios_id='$voluntarios_id',convocatoria_id='$convocatoria_id' WHERE id ='$id' ";
    mysqli_query($conn, $query);
    header("location: index.php");
}






?>

<?php include("includes/header.php") ?>
<!--estatus-->
<div class="container p-4" id="c1">
    <div class="row">
        <div class="col-md-4 mx-auto">
            <div class="card card-body">
                <form action="editregistros.php?id=<?php echo $_GET['id']; ?>" method="post">
                    <div class="form-group">
                        <input type="text" name="voluntarios_id" value="<?php echo $voluntarios_id; ?>" class="form-control" placeholder="-nuevo voluntario_id-">
                    </div>
                    <div class="form-group">
                        <input type="text" name="convocatoria_id" value="<?php echo $convocatoria_id; ?>" class="form-control" placeholder="-nueva convocatoria_id-">
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