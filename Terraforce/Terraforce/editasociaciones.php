<?php

include('db.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = "SELECT * FROM asociaciones WHERE id=$id";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_array($result);
        $empresa_id = $row['empresa_id'];
        $escuela_id = $row['escuela_id'];


    }
}

if (isset($_POST['update'])) {
    $id = $_GET['id'];
    $empresa_id = $_POST['empresa_id'];
    $escuela_id = $_POST['escuela_id'];
  

    $query = "UPDATE asociaciones SET empresa_id='$empresa_id',escuela_id='$escuela_id' WHERE id ='$id' ";
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
                <form action="editasociaciones.php?id=<?php echo $_GET['id']; ?>" method="post">
                    <div class="form-group">
                        <input type="text" name="empresa_id" value="<?php echo $empresa_id; ?>" class="form-control" placeholder="-nueva empresa_id-">
                    </div>
                    <div class="form-group">
                        <input type="text" name="escuela_id" value="<?php echo $escuela_id; ?>" class="form-control" placeholder="-nueva escuela_id-">
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