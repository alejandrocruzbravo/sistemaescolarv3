<?php 

    use Illuminate\Database\Capsule\Manager as DB;
    require '../vendor/autoload.php';
    require 'database.php';


    DB::table('calificaciones')->where('idcalificacion',$_GET['id']->delete());

        header('location:../home.php');
        exit;

?>