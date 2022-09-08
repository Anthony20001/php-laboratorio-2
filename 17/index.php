<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Programa 17</title>
</head>

<body>
    <div class="container p-4">
        <div class="row">
            <h5>17. Crear una aplicación en PHP+HTML que al entrar me muestre en una tabla los números del
                0 al 12, al lado un botón que tenga un vínculo a una segunda pantalla. Al dar clic en el
                botón me debe mostrar en otro HTML la tabla de multiplicar de ese número.
            </h5>
        </div>
    </div>

    <div class="row mt-2">
        <div class="col-4 mx-auto">
            <h1>Hola</h1>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Número</th>
                        <th scope="col">Acción</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                            for($i=0 ; $i<=12; $i++){
                                echo 
                                    '<form action="tabla.php" method="get">
                                        <tr>
                                            <td class="text-left">
                                                <input type="hidden" name="numero_tabla" id="" class="" value="'.$i.'">'.$i.'
                                            </td>
                                            <td><button class="btn btn-primary">Aceptar</button></td>
                                        </tr>
                                    </form>';
                            }
                        
                ?>
                </tbody>
            </table>
        </div>
    </div>


    <script></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>
</body>

</html>