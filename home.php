<?php
  use Illuminate\Database\Capsule\Manager as DB;
  require 'vendor/autoload.php';
  require 'database/database.php';

    $alumnos = DB::table('alumnos')
    ->leftJoin('calificaciones', 'calificaciones.idalumno', '=', 'alumnos.idalumnos')
    ->select('idalumnos', 'nombrealumno', 'primerapellido', 'segundoapellido', 'calificaciones.cal_esp', 'calificaciones.cal_mat', 'calificaciones.cal_hist')
    ->get();


?>

<!-- --------------------->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de calificaciones - Inicio</title>
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/jquery-mobile/js/jquery.mobile.js"></script>
    <link href="node_modules/bulma/css/bulma.min.css" rel="stylesheet">
</head>
<body>
    <?php require 'partials/header.html'; ?>
    <br>
    <br>
    <h3 align="center" class="subtitle is-3">CALIFICACIONES REGISTRADAS</h3>
    <br>

    <div class="buttons">

        <a href="frm_alumno.php" class="button is-info"><img src="img/add-file.svg" width="30px" height="30px">Agregar alumno</a>
 
      </div>
      <div class="table-container">
          <table class="table is-bordered is-striped is-narrow is-hoverable is-fullwidth">
              <thead>
                  <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Español</th>
                    <th> Matematicas</th>
                    <th>Historia</th>
                    <th>Promedio</th>
                    <th>Acción</th>
                  </tr>
                </thead>
              <tbody>
                <?php foreach($alumnos as $alumno){ ?>
                  <tr>
                  <td><?php echo $alumno->idalumnos; ?> </td>
                      <th><?php echo $alumno->nombrealumno; ?> <?php echo $alumno->primerapellido; ?> <?php echo $alumno->segundoapellido; ?></th>
                      <th><?php echo $alumno->cal_esp; ?></th>
                      <th><?php echo $alumno->cal_mat; ?></th>
                      <th><?php echo $alumno->cal_hist; ?></th>
                      <th> <?php echo (($alumno->cal_esp + $alumno->cal_mat + $alumno->cal_hist)/3); ?></th>
                      <th>
                          <a href="frm_mod_calif.php?a=modificar&id=<?php echo $alumno->idalumnos; ?>" class="button is-warning"><img src="img/lapiz.svg" width="15px" height="10px">Modificar</a>
                          <a href="frm_calificacion.php?a=agregar&id=<?php echo $alumno->idalumnos; ?>" class="button is-info" >CALIFICACIÓN</a>
                          <a href="frm_delete_calif.php" class="button is-danger" ><img src="img/borrar.svg" width="15px" height="10px">Eliminar</a>
                      </th>
                  </tr>
                <?php } ?>
              </tbody>
          </table>
        </div>
    </div>
  <?php require 'partials/footer.html'; ?>
</body>
</html>