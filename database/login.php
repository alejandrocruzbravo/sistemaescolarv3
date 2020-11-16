<?php 
  use Illuminate\Database\Capsule\Manager as DB;
  require '../vendor/autoload.php';
  require 'database.php';

  $user = DB::table('usuarios')->where('nombreusuario', $_POST['usuario'])->first(); 
  $mensaje = "";
  if($user->password == $_POST['password']){
      header('location:../home.php');
      exit;

  } else {
      header('location:../index.php');
      exit;
  }
?>