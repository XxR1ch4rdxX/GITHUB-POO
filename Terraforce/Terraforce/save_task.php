<?php

include('db.php');
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_POST['save_task'])) {


        if (empty($_POST['escuela']) || empty($_POST['direccion']) || empty($_POST['correo']) || empty($_POST['telefono'])) {
            echo "Por favor, ingresa todos los datos correctamente.";
            echo '<a href="index.php" class="navbar-brand">TerraForce CRUD</a>';
        } else {

            $escuela = $_POST['escuela1'];
            $direccion = $_POST['direccion'];
            $correo = $_POST['correo'];
            $telefono = $_POST['telefono'];

            $sql = "INSERT INTO escuelas (nombre,direccion,correo,telefono) VALUES ('$escuela','$direccion','$correo','$telefono')";

            $res1 = mysqli_query($conn, $sql);

            if (!$res1) {
                
        
                die("Error, revisa si existe ese id o escribe bien el dato a ingresar");
                echo '<a href="index.php" class="navbar-brand">TerraForce CRUD</a>';
                
            } else {
                echo "Registro Guardado";
                echo "";
                echo '<a href="index.php" class="navbar-brand">TerraForce CRUD</a>';
            }
        }
    }

    if (isset($_POST['save_task2'])) {

        if (empty($_POST['empresa']) && empty($_POST['telefono2']) || empty($_POST['correo2']) || empty($_POST['direccion2'])) {
            echo "Por favor, ingresa todos los datos correctamente.";
            echo '<a href="index.php" class="navbar-brand">TerraForce CRUD</a>';
        } else {

            $empresa = $_POST['empresa'];
            $telefono2 = $_POST['telefono2'];
            $correo2 = $_POST['correo2'];
            $direccion2 = $_POST['direccion2'];

            $sql2 = "INSERT INTO empresas (nombre,correo,telefono,direccion) VALUES ('$empresa','$telefono2','$correo2','$direccion2')";

            $res2 = mysqli_query($conn, $sql2);

            if (!$res2) {
                die("Error, revisa si existe ese id o escribe bien el dato a ingresar");
                echo '<a href="index.php" class="navbar-brand">TerraForce CRUD</a>';
            } else {
                echo "Registro Guardado";
                echo "";
                echo '<a href="index.php" class="navbar-brand">TerraForce CRUD</a>';
            }
        }
    }

    if (isset($_POST['save_task3'])) {

        if (empty($_POST['nombres']) || empty($_POST['apellidos']) || empty($_POST['escuelaid'])) {
            echo "Por favor, ingresa todos los datos correctamente.";
            echo '<a href="index.php" class="navbar-brand">TerraForce CRUD</a>';
        } else {


            $name = $_POST['nombres'];
            $lastname = $_POST['apellidos'];
            $escuelaid = $_POST['escuelaid'];

            $sql3 = "INSERT INTO voluntarios (nombres,apellidos,escuela_id) VALUES ('$name','$lastname','$escuelaid')";

            $res3 = mysqli_query($conn, $sql3);

            if (!$res3) {
                die("Error, revisa si existe ese id o escribe bien el dato a ingresar");
                echo '<a href="index.php" class="navbar-brand">TerraForce CRUD</a>';
            } else {
                echo "Registro Guardado";
                echo "";
                echo '<a href="index.php" class="navbar-brand">TerraForce CRUD</a>';
            }
        }
    }

    if (isset($_POST['save_task4'])) {

        if (empty($_POST['estatus'])) {
            echo "Por favor, ingresa todos los datos correctamente.";
            echo '<a href="index.php" class="navbar-brand">TerraForce CRUD</a>';
        } else {


            $estatus = $_POST['estatus'];


            $sql4 = "INSERT INTO estatus (nombre) VALUES ('$estatus')";

            $res4 = mysqli_query($conn, $sql4);

            if (!$res4) {
                die("Error, revisa si existe ese id o escribe bien el dato a ingresar");
                echo '<a href="index.php" class="navbar-brand">TerraForce CRUD</a>';
            } else {
                echo "Registro Guardado";
                echo "";
                echo '<a href="index.php" class="navbar-brand">TerraForce CRUD</a>';
            }
        }
    }

    if (isset($_POST['save_task5'])) {

        if (empty($_POST['tematica'])) {
            echo "Por favor, ingresa todos los datos correctamente.";
            echo '<a href="index.php" class="navbar-brand">TerraForce CRUD</a>';
        } else {

            $tematica = $_POST['tematica'];


            $sql5 = "INSERT INTO tematicas (nombre) VALUES ('$tematica')";

            $res5 = mysqli_query($conn, $sql5);

            if (!$res5) {
                die("Error, revisa si existe ese id o escribe bien el dato a ingresar");
                echo '<a href="index.php" class="navbar-brand">TerraForce CRUD</a>';
            } else {
                echo "Registro Guardado";
                echo "";
                echo '<a href="index.php" class="navbar-brand">TerraForce CRUD</a>';
            }
        }
    }

    if (isset($_POST['save_task6'])) {

        if (empty($_POST['titulo']) || empty($_POST['descripcion']) || empty($_POST['requisitos']) || empty($_POST['fecha_ini']) || empty($_POST['fecha_ter']) || empty($_POST['cant_vol']) || empty($_POST['estatus_id']) || empty($_POST['empresa_id']) || empty($_POST['tematica_id'])) {
            echo "Por favor, ingresa todos los datos correctamente.";
            echo '<a href="index.php" class="navbar-brand">TerraForce CRUD</a>';
        } else {

            $titulo = $_POST['titulo'];
            $descripcion = $_POST['descripcion'];
            $requisitos = $_POST['requisitos'];
            $fechai = $_POST['fecha_ini'];
            $fechaf = $_POST['fecha_ter'];
            $cant_vol = $_POST['cant_vol'];
            $estatus_id = $_POST['estatus_id'];
            $empresa_id = $_POST['empresa_id'];
            $tematica_id = $_POST['tematica_id'];

            $sql6 = "INSERT INTO convocatorias (titulo,descripcion,requisitos,fecha_inicio,fecha_termino,cantidad_voluntarios,estatus_id,empresa_id,tematica_id) VALUES ('$titulo','$descripcion','$requisitos','$fechai','$fechaf','$cant_vol','$estatus_id','$empresa_id','$tematica_id')";

            $res6 = mysqli_query($conn, $sql6);

            if (!$res6) {
                die("Error, revisa si existe ese id o escribe bien el dato a ingresar");
                echo '<a href="index.php" class="navbar-brand">TerraForce CRUD</a>';
            } else {
                echo "Registro Guardado";
                echo "";
                echo '<a href="index.php" class="navbar-brand">TerraForce CRUD</a>';
            }
        }
    }

    if (isset($_POST['save_task7'])) {

        if (empty($_POST['voluntario_id']) || empty($_POST['convocatoria_id'])) {
            echo "Por favor, ingresa todos los datos correctamente.";
            echo '<a href="index.php" class="navbar-brand">TerraForce CRUD</a>';
        } else {

            $voluntario_id = $_POST['voluntario_id'];
            $convocatoria_id = $_POST['convocatoria_id'];


            $sql7 = "INSERT INTO  registros (voluntarios_id,convocatoria_id) VALUES ('$voluntario_id','$convocatoria_id')";

            $res7 = mysqli_query($conn, $sql7);

            if (!$res7) {
                die("Error, revisa si existe ese id o escribe bien el dato a ingresar");
                echo '<a href="index.php" class="navbar-brand">TerraForce CRUD</a>';
            } else {
                echo "Registro Guardado";
                echo "";
                echo '<a href="index.php" class="navbar-brand">TerraForce CRUD</a>';
            }
        }
    }

    if (isset($_POST['save_task8'])) {

        if (empty($_POST['empresa_id']) || empty($_POST['escuela_id'])) {
            echo "Por favor, ingresa todos los datos correctamente.";
            echo '<a href="index.php" class="navbar-brand">TerraForce CRUD</a>';
        } else {

            $empresa_id = $_POST['empresa_id'];
            $escuela_id = $_POST['escuela_id'];


            $sql8 = "INSERT INTO  asociaciones (empresa_id,escuela_id) VALUES ('$empresa_id','$escuela_id')";

            $res8 = mysqli_query($conn, $sql8);

            if (!$res8) {
                die("Error, revisa si existe ese id o escribe bien el dato a ingresar");
                echo '<a href="index.php" class="navbar-brand">TerraForce CRUD</a>';
            } else {
                echo "Registro Guardado";
                echo "";
                echo '<a href="index.php" class="navbar-brand">TerraForce CRUD</a>';
            }
        }
    }
}
