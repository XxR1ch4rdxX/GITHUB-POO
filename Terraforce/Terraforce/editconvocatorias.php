<?php

include('db.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = "SELECT * FROM convocatorias WHERE id=$id";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_array($result);
        $titulo = $row['titulo'];
        $descripcion = $row['descripcion'];
        $requisitos = $row['requisitos'];
        $fecha_inicio = $row['fecha_inicio'];
        $fecha_termino = $row['fecha_termino'];
        $cantidad_voluntarios = $row['cantidad_voluntarios'];
        $estatus_id = $row['estatus_id'];
        $empresa_id = $row['empresa_id'];
        $tematica_id = $row['tematica_id'];
    }
}

if (isset($_POST['update'])) {
    $id = $_GET['id'];
    $titulo = $_POST['titulo'];
    $descripcion = $_POST['descripcion'];
    $requisitos = $_POST['requisitos'];
    $fecha_inicio = $_POST['fecha_inicio'];
    $fecha_termino = $_POST['fecha_termino'];
    $cantidad_voluntarios = $_POST['cantidad_voluntarios'];
    $estatus_id = $_POST['estatus_id'];
    $empresa_id = $_POST['empresa_id'];
    $tematica_id = $_POST['tematica_id'];

    $query = "UPDATE convocatorias SET titulo='$titulo', descripcion = '$descripcion' ,requisitos ='$requisitos',fecha_inicio ='$fecha_inicio',fecha_termino ='$fecha_termino',cantidad_voluntarios ='$cantidad_voluntarios',estatus_id ='$estatus_id',empresa_id ='$empresa_id',tematica_id ='$tematica_id' WHERE id ='$id' ";
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
                <form action="editconvocatorias.php?id=<?php echo $_GET['id']; ?>" method="post">
                    <div class="form-group">
                        <input type="text" name="titulo" value="<?php echo $titulo; ?>" class="form-control" placeholder="-nuevo titulo-">
                    </div>
                    <div class="form-group">
                        <input type="text" name="descripcion" value="<?php echo $descripcion; ?>" class="form-control" placeholder="-nueva descripcion-">
                    </div>
                    <div class="form-group">
                        <input type="text" name="requisitos" value="<?php echo $requisitos; ?>" class="form-control" placeholder="-nuevos requisitos-">
                    </div>
                    <div class="form-group">
                        <textarea name="fecha_inicio" rows="2" class="form-control" placeholder="-YYYY MM DD-"><?php echo $fecha_inicio; ?></textarea>
                    </div>
                    <div class="form-group">
                        <textarea name="fecha_termino" rows="2" class="form-control" placeholder="-YYYY MM DD-"><?php echo $fecha_termino; ?></textarea>
                    </div>
                    <div class="form-group">
                        <textarea name="cantidad_voluntarios" rows="2" class="form-control" placeholder="-nuevos voluntarios-"><?php echo $cantidad_voluntarios; ?></textarea>
                    </div>
                    <div class="form-group">
                        <textarea name="estatus_id" rows="2" class="form-control" placeholder="-nuevo estus-"><?php echo $estatus_id; ?></textarea>
                    </div>
                    <div class="form-group">
                        <textarea name="empresa_id" rows="2" class="form-control" placeholder="-nueva empresa-"><?php echo $empresa_id; ?></textarea>
                    </div>
                    <div class="form-group">
                        <textarea name="tematica_id" rows="2" class="form-control" placeholder="-nueva tematica-"><?php echo $tematica_id; ?></textarea>
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