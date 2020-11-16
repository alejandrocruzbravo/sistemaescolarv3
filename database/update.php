<?php 

    use Illuminate\Database\Capsule\Manager as DB;
    require '../vendor/autoload.php';
    require 'database.php';

    $alumnos = DB::table('alumnos')
  ->leftJoin('calificaciones', 'calificaciones.idalumno', '=', 'alumnos.idalumnos')
  ->select('idalumnos', 'nombrealumno', 'primerapellido', 'segundoapellido', 'calificaciones.cal_esp', 'calificaciones.cal_mat', 'calificaciones.cal_hist')
  ->get();

    
?>