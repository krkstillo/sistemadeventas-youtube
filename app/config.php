<?php

define('SERVIDOR','localhost');
define('USUARIO','root');
define('PASSWORD','');
define('BD','sisventas');

$servidor = "mysql:dbname=".BD.";host=".SERVIDOR;

try{
    $pdo = new PDO($servidor,USUARIO,PASSWORD,array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"));
    //echo "La conexión a la base de datos fue con exito";
}catch (PDOException $e){
    //print_r($e);
    echo "Error al conectar a la base de datos";
}

$URL = "http://localhost/sisventas";

date_default_timezone_set("America/El_Salvador");
$fechaHora = date('Y-m-d H:i:s');

//if (isset($_SESSION['mensaje'])) {
//    $respuesta = $_SESSION['mensaje']; ?>
<!--    <script>
            Swal.fire({
                position: 'center',
                icon: 'error',
                title: '<?php echo $respuesta;?>',
                showConfirmButton: false,
                timer: 2000
            })
    </script>
<?php
    //unset($_SESSION['mensaje']);
//}

