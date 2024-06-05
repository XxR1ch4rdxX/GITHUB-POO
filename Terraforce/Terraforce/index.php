<?php include("db.php") ?>
<?php include("includes/header.php") ?>
<?php include("includes/footer.php") ?>




<div class="container" p-4 style="border-top: 30px;">
    <form action="save_task.php" method="post">
        <select name="tablas" class="form-select" onchange="tabla()">
            <option selected>Selecciona una tabla para realizar alguna Alta, Baja o Cambio</option>
            <option value="1">Escuelas</option>
            <option value="2">Empresas</option>
            <option value="3">Voluntarios</option>
            <option value="4">Estatus</option>
            <option value="5">Temáticas</option>
            <option value="6">Convocatorias</option>
            <option value="7">Registros</option>
            <option value="8">Asociaciones</option>
        </select>
    </form>
</div>

<!--Escuelas--->
<div class="container p-4" id="boton1" style="display: none;">
    <div class="container p-4" style="display: inline;">
        <button class="btn btn-warning" style="display: block;" id="b1" onclick="b1()" ondblclick="bb1()">➕</button>
    </div>
</div>

<div class="container p-4" style="display: none;" id="cont01">
    <div class="row">
        <div class="col-md-4">
            <div class="card card-body" style="display: none;" id="cont1">
                <form action="save_task.php" method="POST">
                    <input type="hidden" name="save_task" value="1">
                    <div class="form-group">
                        <label>Escuela</label>
                        <input type="text" name="escuela" class="form-control" placeholder="Cecyte plantel 6" autofocus>
                    </div>
                    <div class="form-group">
                        <label>Direccion</label>
                        <textarea name="direccion" rows="2" class="form-control" placeholder="candiles 657 , labna 19" id="e1"></textarea>

                        <label>Correo</label>
                        <textarea name="correo" rows="2" class="form-control" placeholder="cecyte.edu.mx@hotmail.com" id="e2"></textarea>

                        <label>Telefono</label>
                        <textarea name="telefono" rows="2" class="form-control" placeholder="55234378" id="e3"></textarea>
                    </div>
                    <input type="submit" class="btn btn-success btn-block" name="guardar1" value="Ok">
                </form>
            </div>
        </div>
        <div class="col-md-8">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Direccion</th>
                        <th>Correo</th>
                        <th>Telefono</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                    $query1 = 'SELECT * from escuelas';
                    $resumen1 = mysqli_query($conn, $query1);

                    while ($row = mysqli_fetch_array($resumen1)) { ?>
                        <tr>
                            <td><?php echo $row['id'] ?></td>
                            <td><?php echo $row['nombre'] ?></td>
                            <td><?php echo $row['direccion'] ?></td>
                            <td><?php echo $row['correo'] ?></td>
                            <td><?php echo $row['telefono'] ?></td>
                            <td>
                                <a style="text-decoration: none;" href="editescuela.php?id=<?php echo $row['id'] ?>">
                                    🖌
                                </a>

                                <a href="delete.php?id=<?php echo $row['id'] ?>">
                                    🗑
                                </a>
                            </td>
                        </tr>

                    <?php } ?>

                </tbody>
            </table>
        </div>
    </div>
</div>

<!--Empresa--->
<div class="container p-4" id="boton2" style="display: none;">
    <div class="container p-4" style="display: inline;">
        <button class="btn btn-warning" style="display: block;" id="b2" onclick="b2()" ondblclick="bb2()">➕</button>
    </div>
</div>
<div class="container p-4" style="display: none;" id="cont02">
    <div class="row">
        <div class="col-md-4">
            <div class="card card-body" style="display: none;" id="cont2">
                <form action="save_task.php" method="post">
                    <input type="hidden" name="save_task2" value="1">
                    <div class="form-group">
                        <label>Nombre de la empresa</label>
                        <input type="text" name="empresa" class="form-control" placeholder="General Electric" autofocus>
                    </div>
                    <div class="form-group">
                        <label>Telefono</label>
                        <textarea name="telefono2" rows="2" class="form-control" placeholder="4426558032"></textarea>

                        <label>Correo</label>
                        <textarea name="correo2" rows="2" class="form-control" placeholder="GeneralElectricMX@gmail.com"></textarea>

                        <label>Direccion</label>
                        <textarea name="direccion2" rows="2" class="form-control" placeholder="Indios verdes 51"></textarea>
                    </div>
                    <input type="submit" class="btn btn-success btn-block" name="guardar2" value="Ok">
                </form>
            </div>
        </div>
        <div class="col-md-8">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Direccion</th>
                        <th>Correo</th>
                        <th>Telefono</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                    $query2 = 'SELECT * from empresas';
                    $resumen1 = mysqli_query($conn, $query2);

                    while ($row = mysqli_fetch_array($resumen1)) { ?>
                        <tr>
                            <td><?php echo $row['id'] ?></td>
                            <td><?php echo $row['nombre'] ?></td>
                            <td><?php echo $row['direccion'] ?></td>
                            <td><?php echo $row['correo'] ?></td>
                            <td><?php echo $row['telefono'] ?></td>
                            <td>
                                <a style="text-decoration: none;" href="editempresa.php?id=<?php echo $row['id'] ?>">
                                    🖌
                                </a>

                                <a href="delete.php?id=<?php echo $row['id'] ?>">
                                    🗑
                                </a>
                            </td>
                        </tr>

                    <?php } ?>

                </tbody>
            </table>
        </div>
    </div>
</div>

<!--voluntarios--->
<div class="container p-4" id="boton3" style="display: none;">
    <div class="container p-4" style="display: inline;">
        <button class="btn btn-warning" style="display: block;" id="b3" onclick="b3()" ondblclick="bb3()">➕</button>
    </div>
</div>
<div class="container p-4" style="display: none;" id="cont03">
    <div class="row">
        <div class="col-md-4">
            <div class="card card-body" style="display: none;" id="cont3">
                <form action="save_task.php" method="post">
                    <input type="hidden" name="save_task3" value="1">
                    <div class="form-group">
                        <label>Nombre o Nombres</label>
                        <input type="text" name="nombres" class="form-control" placeholder="Jhon" autofocus>
                    </div>
                    <div class="form-group">
                        <label>Apellido o Apellidos</label>
                        <textarea name="apellidos" rows="2" class="form-control" placeholder="Doe"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Escuela id</label>
                        <textarea name="escuelaid" rows="2" class="form-control" placeholder="1"></textarea>
                    </div>
                    <input type="submit" class="btn btn-success btn-block" name="guardar3" value="Ok">
                </form>
            </div>
        </div>
        <div class="col-md-8">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombres</th>
                        <th>Apellidos</th>
                        <th>Escuela_id</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                    $query2 = 'SELECT * from voluntarios';
                    $resumen2 = mysqli_query($conn, $query2);

                    while ($row = mysqli_fetch_array($resumen2)) { ?>
                        <tr>
                            <td><?php echo $row['id'] ?></td>
                            <td><?php echo $row['nombres'] ?></td>
                            <td><?php echo $row['apellidos'] ?></td>
                            <td><?php echo $row['escuela_id'] ?></td>
                            <td>
                                <a style="text-decoration: none;" href="editvoluntarios.php?id=<?php echo $row['id'] ?>">
                                    🖌
                                </a>

                                <a href="delete.php?id=<?php echo $row['id'] ?>">
                                    🗑
                                </a>
                            </td>
                        </tr>

                    <?php } ?>

                </tbody>
            </table>
        </div>
    </div>
</div>

<!--Estatus--->
<div class="container p-4" id="boton4" style="display: none;">
    <div class="container p-4" style="display: inline;">
        <button class="btn btn-warning" style="display: block;" id="b4" onclick="b4()" ondblclick="bb4()">➕</button>
    </div>
</div>
<div class="container p-4" style="display: none;" id="cont04">
    <div class="row">
        <div class="col-md-4">
            <div class="card card-body" style="display: none;" id="cont4">
                <form action="save_task.php" method="post">
                    <input type="hidden" name="save_task4" value="1">
                    <div class="form-group">
                        <label>Estatus</label>
                        <input type="text" name="estatus" class="form-control" placeholder="Aun puedes inscribirte" autofocus>
                    </div>
                    <input type="submit" class="btn btn-success btn-block" name="guardar4" value="Ok">
                </form>
            </div>
        </div>
        <div class="col-md-8">
        <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                    $query3 = 'SELECT * from estatus';
                    $resumen3 = mysqli_query($conn, $query3);

                    while ($row = mysqli_fetch_array($resumen3)) { ?>
                        <tr>
                            <td><?php echo $row['id'] ?></td>
                            <td><?php echo $row['nombre'] ?></td>
                            <td>
                                <a style="text-decoration: none;" href="editestatus.php?id=<?php echo $row['id'] ?>">
                                    🖌
                                </a>

                                <a href="delete.php?id=<?php echo $row['id'] ?>">
                                    🗑
                                </a>
                            </td>
                        </tr>

                    <?php } ?>

                </tbody>
            </table>
        </div>
    </div>
</div>

<!--Tematicas--->
<div class="container p-4" id="boton5" style="display: none;">
    <div class="container p-4" style="display: inline;">
        <button class="btn btn-warning" style="display: block;" id="b5" onclick="b5()" ondblclick="bb5()">➕</button>
    </div>
</div>
<div class="container p-4" style="display: none;" id="cont05">
    <div class="row">
        <div class="col-md-4">
            <div class="card card-body" style="display: none;" id="cont5">
                <form action="save_task.php" method="post">
                    <input type="hidden" name="save_task5" value="1">
                    <div class="form-group">
                        <label>Tematica</label>
                        <input type="text" name="tematica" class="form-control" placeholder="Ecologia" autofocus>
                    </div>
                    <input type="submit" class="btn btn-success btn-block" name="guardar5" value="Ok">
                </form>
            </div>
        </div>
        <div class="col-md-8">
        <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                    $query4 = 'SELECT * from tematicas';
                    $resumen4 = mysqli_query($conn, $query4);

                    while ($row = mysqli_fetch_array($resumen4)) { ?>
                        <tr>
                            <td><?php echo $row['id'] ?></td>
                            <td><?php echo $row['nombre'] ?></td>
                            <td>
                                <a style="text-decoration: none;" href="edittematicas.php?id=<?php echo $row['id'] ?>">
                                    🖌
                                </a>

                                <a href="delete.php?id=<?php echo $row['id'] ?>">
                                    🗑
                                </a>
                            </td>
                        </tr>

                    <?php } ?>

                </tbody>
            </table>
        </div>
    </div>
</div>

<!--Convocatorias--->
<div class="container p-4" id="boton6" style="display: none;">
    <div class="container p-4" style="display: inline;">
        <button class="btn btn-warning" style="display: block;" id="b6" onclick="b6()" ondblclick="bb6()">➕</button>
    </div>
</div>
<div class="container p-4" style="display: none;" id="cont06">
    <div class="row">
        <div class="col-md-4">
            <div class="card card-body" style="display: none;" id="cont6">
                <form action="save_task.php" method="post">
                    <input type="hidden" name="save_task6" value="1">
                    <div class="form-group">
                        <label>Titulo</label>
                        <input type="text" name="titulo" class="form-control" placeholder="Tata-Forest Reforestation" autofocus>
                        <div class="form-group">
                            <label>Descripcion</label>
                            <textarea name="descripcion" rows="2" class="form-control" placeholder="Convoca a jovenes estudiantes para..."></textarea>
                        </div>
                        <div class="form-group">
                            <label>Requisitos</label>
                            <textarea name="requisitos" rows="2" class="form-control" placeholder="mayores de edad, buena actitud"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Fecha de inicio</label>
                            <textarea name="fecha_ini" rows="2" class="form-control" placeholder="YYYY-MM-DD"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Fecha de termino</label>
                            <textarea name="fecha_ter" rows="2" class="form-control" placeholder="YYYY-MM-DD"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Cantidad de Voluntarios</label>
                            <textarea name="cant_vol" rows="2" class="form-control" placeholder="100"></textarea>
                        </div>
                        <div class="form-group">
                            <label>id estatus</label>
                            <textarea name="estatus_id" rows="2" class="form-control" placeholder="1"></textarea>
                        </div>
                        <div class="form-group">
                            <label>id empresa</label>
                            <textarea name="empresa_id" rows="2" class="form-control" placeholder="1"></textarea>
                        </div>
                        <div class="form-group">
                            <label>id tematica</label>
                            <textarea name="tematica_id" rows="2" class="form-control" placeholder="1"></textarea>
                        </div>
                    </div>
                    <input type="submit" class="btn btn-success btn-block" name="guardar5" value="Ok">
                </form>
            </div>
        </div>
        <div class="col-md-11">
        <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Titulo</th>
                        <th>Descripcion</th>
                        <th>Requisitos</th>
                        <th>Fecha_Inicio</th>
                        <th>Fecha_Termino</th>
                        <th>Cantidad_Voluntarios</th>
                        <th>Estatus_id</th>
                        <th>Empresa_id</th>
                        <th>Tematica_id</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                    $query2 = 'SELECT * from convocatorias';
                    $resumen2 = mysqli_query($conn, $query2);

                    while ($row = mysqli_fetch_array($resumen2)) { ?>
                        <tr>
                            <td><?php echo $row['id'] ?></td>
                            <td><?php echo $row['titulo'] ?></td>
                            <td><?php echo $row['descripcion'] ?></td>
                            <td><?php echo $row['requisitos'] ?></td>
                            <td><?php echo $row['fecha_inicio'] ?></td>
                            <td><?php echo $row['fecha_termino'] ?></td>
                            <td><?php echo $row['cantidad_voluntarios'] ?></td>
                            <td><?php echo $row['estatus_id'] ?></td>
                            <td><?php echo $row['empresa_id'] ?></td>
                            <td><?php echo $row['tematica_id'] ?></td>
                            <td>
                                <a style="text-decoration: none;" href="editconvocatorias.php?id=<?php echo $row['id'] ?>">
                                    🖌
                                </a>

                                <a href="delete.php?id=<?php echo $row['id'] ?>">
                                    🗑
                                </a>
                            </td>
                        </tr>

                    <?php } ?>

                </tbody>
            </table>
        </div>
    </div>
</div>

<!--registros--->
<div class="container p-4" id="boton7" style="display: none;">
    <div class="container p-4" style="display: inline;">
        <button class="btn btn-warning" style="display: block;" id="b7" onclick="b7()" ondblclick="bb5()">➕</button>
    </div>
</div>
<div class="container p-4" style="display: none;" id="cont07">
    <div class="row">
        <div class="col-md-4">
            <div class="card card-body" style="display: none;" id="cont7">
                <form action="save_task.php" method="post">
                    <input type="hidden" name="save_task7" value="1">
                    <div class="form-group">
                        <label>Voluntarios id</label>
                        <input type="text" name="voluntario_id" class="form-control" placeholder="1" autofocus>
                    </div>
                    <div class="form-group">
                        <label>Convocatoria id</label>
                        <input type="text" name="convocatoria_id" class="form-control" placeholder="1" autofocus>
                    </div>
                    <input type="submit" class="btn btn-success" name="guardar5" value="Ok">
                </form>
            </div>
        </div>
        <div class="col-md-8">
        <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Voluntarios_id</th>
                        <th>Convocatoria_id</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                    $query7 = 'SELECT * from registros';
                    $resumen7 = mysqli_query($conn, $query7);

                    while ($row = mysqli_fetch_array($resumen7)) { ?>
                        <tr>
                            <td><?php echo $row['id'] ?></td>
                            <td><?php echo $row['voluntarios_id'] ?></td>
                            <td><?php echo $row['convocatoria_id'] ?></td>
                            <td>
                                <a style="text-decoration: none;" href="editregistros.php?id=<?php echo $row['id'] ?>">
                                    🖌
                                </a>

                                <a href="delete.php?id=<?php echo $row['id'] ?>">
                                    🗑
                                </a>
                            </td>
                        </tr>

                    <?php } ?>

                </tbody>
            </table>
        </div>
    </div>
</div>

<!--asociaciones--->
<div class="container p-4" id="boton8" style="display: none;">
    <div class="container p-4" style="display: inline;">
        <button class="btn btn-warning" style="display: block;" id="b8" onclick="b8()" ondblclick="bb5()">➕</button>
    </div>
</div>
<div class="container p-4" style="display: none;" id="cont08">
    <div class="row">
        <div class="col-md-4">
            <div class="card card-body" style="display: none;" id="cont8">
                <form action="save_task.php" method="post">
                    <input type="hidden" name="save_task8" value="1">
                    <div class="form-group">
                        <label>Empresa id</label>
                        <input type="text" name="empresa_id" class="form-control" placeholder="1" autofocus>
                    </div>
                    <div class="form-group">
                        <label>Escuela id</label>
                        <input type="text" name="escuela_id" class="form-control" placeholder="1" autofocus>
                    </div>
                    <input type="submit" class="btn btn-success" name="guardar5" value="Ok">
                </form>
            </div>
        </div>
        <div class="col-md-8">
        <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Empresa_id</th>
                        <th>Escuela_id</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                    $query7 = 'SELECT * from asociaciones';
                    $resumen7 = mysqli_query($conn, $query7);

                    while ($row = mysqli_fetch_array($resumen7)) { ?>
                        <tr>
                            <td><?php echo $row['id'] ?></td>
                            <td><?php echo $row['empresa_id'] ?></td>
                            <td><?php echo $row['escuela_id'] ?></td>
                            <td>
                                <a style="text-decoration: none;" href="editasociaciones.php?id=<?php echo $row['id'] ?>">
                                    🖌
                                </a>

                                <a href="delete.php?id=<?php echo $row['id'] ?>">
                                    🗑
                                </a>
                            </td>
                        </tr>

                    <?php } ?>

                </tbody>
            </table>
        </div>
    </div>
</div>




<script>
    function tabla() {
        var valorTabla = document.getElementsByName('tablas')[0].value;



        if (valorTabla == 1) {
            document.getElementById("boton1").style.display = "block"
            document.getElementById("cont01").style.display = "block"


            document.getElementById("cont02").style.display = "none";
            document.getElementById("cont03").style.display = "none";
            document.getElementById("cont04").style.display = "none";
            document.getElementById("cont05").style.display = "none";
            document.getElementById("cont06").style.display = "none";
            document.getElementById("cont07").style.display = "none";
            document.getElementById("cont08").style.display = "none";


            document.getElementById("boton2").style.display = "none"
            document.getElementById("boton3").style.display = "none"
            document.getElementById("boton4").style.display = "none"
            document.getElementById("boton5").style.display = "none"
            document.getElementById("boton6").style.display = "none"
            document.getElementById("boton7").style.display = "none"
            document.getElementById("boton8").style.display = "none"


            document.getElementById("cont2").style.display = "none"
            document.getElementById("cont3").style.display = "none"
            document.getElementById("cont4").style.display = "none"
            document.getElementById("cont5").style.display = "none"
            document.getElementById("cont6").style.display = "none"
            document.getElementById("cont7").style.display = "none"
            document.getElementById("cont8").style.display = "none"

        }
        if (valorTabla == 2) {
            document.getElementById("boton2").style.display = "block"
            document.getElementById("cont02").style.display = "block"

            document.getElementById("cont01").style.display = "none";
            document.getElementById("cont03").style.display = "none";
            document.getElementById("cont04").style.display = "none";
            document.getElementById("cont05").style.display = "none";
            document.getElementById("cont06").style.display = "none";
            document.getElementById("cont07").style.display = "none";
            document.getElementById("cont08").style.display = "none";

            document.getElementById("boton1").style.display = "none"
            document.getElementById("boton3").style.display = "none"
            document.getElementById("boton4").style.display = "none"
            document.getElementById("boton5").style.display = "none"
            document.getElementById("boton6").style.display = "none"
            document.getElementById("boton7").style.display = "none"
            document.getElementById("boton8").style.display = "none"

            document.getElementById("cont1").style.display = "none"
            document.getElementById("cont3").style.display = "none"
            document.getElementById("cont4").style.display = "none"
            document.getElementById("cont5").style.display = "none"
            document.getElementById("cont6").style.display = "none"
            document.getElementById("cont7").style.display = "none"
            document.getElementById("cont8").style.display = "none"

        }
        if (valorTabla == 3) {
            document.getElementById("boton3").style.display = "block"
            document.getElementById("cont03").style.display = "block"

            document.getElementById("cont01").style.display = "none";
            document.getElementById("cont02").style.display = "none";
            document.getElementById("cont04").style.display = "none";
            document.getElementById("cont05").style.display = "none";
            document.getElementById("cont06").style.display = "none";
            document.getElementById("cont07").style.display = "none";
            document.getElementById("cont08").style.display = "none";

            document.getElementById("boton1").style.display = "none"
            document.getElementById("boton2").style.display = "none"
            document.getElementById("boton4").style.display = "none"
            document.getElementById("boton5").style.display = "none"
            document.getElementById("boton6").style.display = "none"
            document.getElementById("boton7").style.display = "none"
            document.getElementById("boton8").style.display = "none"

            document.getElementById("cont2").style.display = "none"
            document.getElementById("cont1").style.display = "none"
            document.getElementById("cont4").style.display = "none"
            document.getElementById("cont5").style.display = "none"
            document.getElementById("cont6").style.display = "none"
            document.getElementById("cont7").style.display = "none"
            document.getElementById("cont8").style.display = "none"

        }

        if (valorTabla == 4) {
            document.getElementById("boton4").style.display = "block"
            document.getElementById("cont04").style.display = "block"

            document.getElementById("cont01").style.display = "none";
            document.getElementById("cont02").style.display = "none";
            document.getElementById("cont03").style.display = "none";
            document.getElementById("cont05").style.display = "none";
            document.getElementById("cont06").style.display = "none";
            document.getElementById("cont07").style.display = "none";
            document.getElementById("cont08").style.display = "none";

            document.getElementById("boton1").style.display = "none"
            document.getElementById("boton2").style.display = "none"
            document.getElementById("boton3").style.display = "none"
            document.getElementById("boton5").style.display = "none"
            document.getElementById("boton6").style.display = "none"
            document.getElementById("boton7").style.display = "none"
            document.getElementById("boton8").style.display = "none"

            document.getElementById("cont2").style.display = "none"
            document.getElementById("cont3").style.display = "none"
            document.getElementById("cont1").style.display = "none"
            document.getElementById("cont5").style.display = "none"
            document.getElementById("cont6").style.display = "none"
            document.getElementById("cont7").style.display = "none"
            document.getElementById("cont8").style.display = "none"


        }

        if (valorTabla == 5) {
            document.getElementById("boton5").style.display = "block"
            document.getElementById("cont05").style.display = "block"

            document.getElementById("cont01").style.display = "none";
            document.getElementById("cont02").style.display = "none";
            document.getElementById("cont03").style.display = "none";
            document.getElementById("cont04").style.display = "none";
            document.getElementById("cont06").style.display = "none";
            document.getElementById("cont07").style.display = "none";
            document.getElementById("cont08").style.display = "none";

            document.getElementById("boton1").style.display = "none"
            document.getElementById("boton2").style.display = "none"
            document.getElementById("boton3").style.display = "none"
            document.getElementById("boton4").style.display = "none"
            document.getElementById("boton6").style.display = "none"
            document.getElementById("boton7").style.display = "none"
            document.getElementById("boton8").style.display = "none"

            document.getElementById("cont2").style.display = "none"
            document.getElementById("cont3").style.display = "none"
            document.getElementById("cont4").style.display = "none"
            document.getElementById("cont1").style.display = "none"
            document.getElementById("cont6").style.display = "none"
            document.getElementById("cont7").style.display = "none"
            document.getElementById("cont8").style.display = "none"


        }

        if (valorTabla == 6) {
            document.getElementById("boton6").style.display = "block"
            document.getElementById("cont06").style.display = "block"

            document.getElementById("cont01").style.display = "none";
            document.getElementById("cont02").style.display = "none";
            document.getElementById("cont03").style.display = "none";
            document.getElementById("cont04").style.display = "none";
            document.getElementById("cont05").style.display = "none";
            document.getElementById("cont07").style.display = "none";
            document.getElementById("cont08").style.display = "none";

            document.getElementById("boton1").style.display = "none"
            document.getElementById("boton2").style.display = "none"
            document.getElementById("boton3").style.display = "none"
            document.getElementById("boton4").style.display = "none"
            document.getElementById("boton5").style.display = "none"
            document.getElementById("boton7").style.display = "none"
            document.getElementById("boton8").style.display = "none"

            document.getElementById("cont2").style.display = "none"
            document.getElementById("cont3").style.display = "none"
            document.getElementById("cont4").style.display = "none"
            document.getElementById("cont5").style.display = "none"
            document.getElementById("cont1").style.display = "none"
            document.getElementById("cont7").style.display = "none"
            document.getElementById("cont8").style.display = "none"
        }

        if (valorTabla == 7) {
            document.getElementById("boton7").style.display = "block"
            document.getElementById("cont07").style.display = "block"

            document.getElementById("cont01").style.display = "none";
            document.getElementById("cont02").style.display = "none";
            document.getElementById("cont03").style.display = "none";
            document.getElementById("cont04").style.display = "none";
            document.getElementById("cont05").style.display = "none";
            document.getElementById("cont06").style.display = "none";
            document.getElementById("cont08").style.display = "none";

            document.getElementById("boton1").style.display = "none"
            document.getElementById("boton2").style.display = "none"
            document.getElementById("boton3").style.display = "none"
            document.getElementById("boton4").style.display = "none"
            document.getElementById("boton5").style.display = "none"
            document.getElementById("boton6").style.display = "none"
            document.getElementById("boton8").style.display = "none"

            document.getElementById("cont2").style.display = "none"
            document.getElementById("cont3").style.display = "none"
            document.getElementById("cont4").style.display = "none"
            document.getElementById("cont5").style.display = "none"
            document.getElementById("cont1").style.display = "none"
            document.getElementById("cont6").style.display = "none"
            document.getElementById("cont8").style.display = "none"
        }


        if (valorTabla == 8) {
            document.getElementById("boton8").style.display = "block"
            document.getElementById("cont08").style.display = "block"

            document.getElementById("cont01").style.display = "none";
            document.getElementById("cont02").style.display = "none";
            document.getElementById("cont03").style.display = "none";
            document.getElementById("cont04").style.display = "none";
            document.getElementById("cont05").style.display = "none";
            document.getElementById("cont06").style.display = "none";
            document.getElementById("cont07").style.display = "none";


            document.getElementById("boton1").style.display = "none"
            document.getElementById("boton2").style.display = "none"
            document.getElementById("boton3").style.display = "none"
            document.getElementById("boton4").style.display = "none"
            document.getElementById("boton5").style.display = "none"
            document.getElementById("boton6").style.display = "none"
            document.getElementById("boton7").style.display = "none"

            document.getElementById("cont2").style.display = "none"
            document.getElementById("cont3").style.display = "none"
            document.getElementById("cont4").style.display = "none"
            document.getElementById("cont5").style.display = "none"
            document.getElementById("cont1").style.display = "none"
            document.getElementById("cont7").style.display = "none"
            document.getElementById("cont6").style.display = "none"
        }

        valorTabla == 0
        document.getElementsByName('tablas')[0].onchange = tabla;
    }

    function b1() {
        let divm = document.getElementById("cont1")

        if (divm.style.display === "none" || divm.style.display === "") {
            divm.style.display = "block"
        } else {
            divm.style.display = "none"
        }

    }

    function b2() {
        let divm = document.getElementById("cont2")

        if (divm.style.display === "none" || divm.style.display === "") {
            divm.style.display = "block"
        } else {
            divm.style.display = "none"
        }


        document.getElementById("boton1").style.display = "none"
    }

    function b3() {
        let divm = document.getElementById("cont3")

        if (divm.style.display === "none" || divm.style.display === "") {
            divm.style.display = "block"
        } else {
            divm.style.display = "none"
        }


        document.getElementById("boton1").style.display = "none"
        document.getElementById("boton2").style.display = "none"
    }

    function b4() {
        let divm = document.getElementById("cont4")

        if (divm.style.display === "none" || divm.style.display === "") {
            divm.style.display = "block"
        } else {
            divm.style.display = "none"
        }


        document.getElementById("boton1").style.display = "none"
        document.getElementById("boton2").style.display = "none"
        document.getElementById("boton3").style.display = "none"

    }

    function b5() {

        let divm = document.getElementById("cont5")

        if (divm.style.display === "none" || divm.style.display === "") {
            divm.style.display = "block"
        } else {
            divm.style.display = "none"
        }


        document.getElementById("boton1").style.display = "none"
        document.getElementById("boton2").style.display = "none"
        document.getElementById("boton3").style.display = "none"
        document.getElementById("boton4").style.display = "none"
    }

    function b6() {
        let divm = document.getElementById("cont6")

        if (divm.style.display === "none" || divm.style.display === "") {
            divm.style.display = "block"
        } else {
            divm.style.display = "none"
        }


        document.getElementById("boton1").style.display = "none"
        document.getElementById("boton2").style.display = "none"
        document.getElementById("boton3").style.display = "none"
        document.getElementById("boton4").style.display = "none"
        document.getElementById("boton5").style.display = "none"
    }

    function b7() {
        let divm = document.getElementById("cont7")

        if (divm.style.display === "none" || divm.style.display === "") {
            divm.style.display = "block"
        } else {
            divm.style.display = "none"
        }


        document.getElementById("boton1").style.display = "none"
        document.getElementById("boton2").style.display = "none"
        document.getElementById("boton3").style.display = "none"
        document.getElementById("boton4").style.display = "none"
        document.getElementById("boton5").style.display = "none"
        document.getElementById("boton6").style.display = "none"
        document.getElementById("boton8").style.display = "none"
    }

    function b8() {
        let divm = document.getElementById("cont8")

        if (divm.style.display === "none" || divm.style.display === "") {
            divm.style.display = "block"
        } else {
            divm.style.display = "none"
        }


        document.getElementById("boton1").style.display = "none"
        document.getElementById("boton2").style.display = "none"
        document.getElementById("boton3").style.display = "none"
        document.getElementById("boton4").style.display = "none"
        document.getElementById("boton5").style.display = "none"
        document.getElementById("boton6").style.display = "none"
        document.getElementById("boton7").style.display = "none"
    }


    //validaciones:
</script>