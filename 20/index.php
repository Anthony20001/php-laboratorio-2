<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Programa 20</title>
</head>

<body>
    <div class="container">
        <div class="row mt-4">
            <div class="col-12">
                <h5>20. Crear un archivo que con valores generados al azar con 10 filas por la función rand() de php.
                    Los gráficos se deben mostrar con progress bar de html5:</h5>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-5">
                <table class="table">
                    <thead>
                        <tr>
                            <td>Númnero</td>
                            <td>Valor</td>
                            <td>Gráfico utilizado por progress bar</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            for($i=1; $i<=10;$i++){
                                $aleatorio = rand(0, 100);
                                echo 
                                    '<tr>'.
                                        '<td>'.$i.'</td>'.
                                        '<td>'.$aleatorio.'</td>'.
                                        '<td>'.
                                            '<div class="progress">
                                                <div class="progress-bar bg-primary progress-bar-striped progress-bar-animated" role="progressbar" style="width: '.$aleatorio.'%;" aria-valuenow="'.$aleatorio.'" aria-valuemin="0" aria-valuemax="100">'.$aleatorio.'%</div>
                                            </div>'
                                        .'</td>'.
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