<?php 

    use Illuminate\Database\Capsule\Manager as DB;
    require '../vendor/autoload.php';
    require 'database.php';


    DB::table('calificaciones')->insert(
        ['cal_esp' => $_POST['cal_español'],
        'cal_mat' => $_POST['cal_matematicas'],
        'cal_hist' => $_POST['cal_historia']]);

        header('location:../home.php');
        exit;

?>