<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Programa 18</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <h5>
                18. Crear un programa en PHP + HTML que muestre los números del 1 al 100, y también
                muestre el número cifrado con la función md5 o cualquier otra función de cifrado. Además
                se muestre un vínculo hacia una url que muestre el valor cifrado.
            </h5>
        </div>

        <div class="row mt-4">
            <div class="col-6">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Número</th>
                            <th>Encriptado</th>
                            <th>Ver en otra página</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                       for($i=0; $i<100; $i++) {
                            $key = md5($i);
                            echo '<tr>'.
                                        '<td>'.$i.'</td>'.
                                        '<td>'.$key.'</td>'.
                                        '<td>'.
                                            '<form method="get" action="encriptad.php">'.
                                                '<input name="numero" type="hidden" value"2">'.
                                                '<input name="clave" type="hidden" value"2">'.
                                                '<button class="btn btn-primary w-100">Ver</button>'.
                                            '</form>'.
                                        '</td>'.
                                        
                                  '</tr>';
                       }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>
</body>

</html>