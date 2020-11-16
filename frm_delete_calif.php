<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/jquery-mobile/js/jquery.mobile.js"></script>
    <link href="node_modules/bulma/css/bulma.min.css" rel="stylesheet">
    <title>Registro de calificaciones - Modificar calificación</title>
</head>
<body>
    <?php require 'partials/header.html'; ?>
    <br>
    <br>
    <br>
    <h2 align="center" class="subtitle is-2"><img src="img/borrar.svg" width="40px" height="55px">ELIMINAR REGISTRO</h2>


    <div class="columns is-multiline is-mobile">
        <div class="column is-one-quarter">
        <article class="message is-danger">
            <div class="message-header">
                <p>Eliminar registro</p>
            </div>
            <div class="message-body">
                Usted esta apunto de eliminar un registro de la tabla de calificaciones escolares. Todos los datos que usted elimine 
                serán guardados y no podrá volver a recuperarlos una vez eliminados. Se eliminara todo el registro completo.
            </div>
        </article>
        </div>


        <div class="column">
            <form action="database/delete.php" method="GET">
                <div class="field">
                    <label class="label">Nombre del alumno</label>
                    <div class="control">
                        <input class="input is-rounded" type="text" placeholder="Alejandro Cruz Bravo" disabled>
                    </div>
                </div>
                <div class="field">
                    <label class="label">Calificación de español</label>
                    <div class="control">
                        <input class="input is-rounded is-small" type="text" disabled>
                    </div>
                </div>
                <div class="field">
                    <label class="label">Calificación de matematicas</label>
                    <div class="control">
                        <input class="input is-rounded is-small" type="text" disabled>
                    </div>
                </div>
                <div class="field">
                    <label class="label">Calificación de historia</label>
                    <div class="control">
                        <input class="input is-rounded is-small" type="text" disabled>
                    </div>
                </div>
                <br>
                <div class="buttons">
                    <a href="home.php" class="button is-danger"><img src="img/borrar.svg" width="15px" height="10px">ELIMINAR</a>
                    <a href="home.php" class="button is-light">VOLVER</a>
                </div>
            </form>           
        </div>

        
    </div>

    <?php require 'partials/footer.html'; ?>
</body>
</html>