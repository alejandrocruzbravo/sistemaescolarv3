<?php 

    use Illuminate\Database\Capsule\Manager as DB;
    require '../vendor/autoload.php';
    require 'database.php';

    DB::table('alumnos')->insert(
        ['nombrealumno' => $_POST['nombre'],
         'primerapellido' => $_POST['apellidoPat'],
        'segundoapellido' => $_POST['apellidoMat']]);
    

?>
