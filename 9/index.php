<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Programa 9</title>
</head>

<body>
    <div class="container mt-4">
        <div class="row">
            <h5>9. Se pide crear un algoritmo que calcule el porcentaje de alumnos y alumnas de un salón de
                clase.
            </h5>
            <h5>
                <ul>
                    <li>Por ejemplo, si hay 25 alumnos y 20 alumnas la salida debe ser:</li>
                    <li>Porcentaje de alumnos: (25/45)*100 = 55.55555%</li>
                    <li>Porcentaje de alumnas: (20/45)*100 = 44.44444%</li>
                </ul>
            </h5>

            <h5>Generar una tabla html con los resultados</h5>
        </div>

        <div class="row mt-5 d-flex justify-content-between">
            <div class="col-4">
                <form action="index.php" method="get" class="d-block d-grid gap-3 w-100">
                    <h5>Introduzca los siguientes datos:</h5>
                    <div class="form-group w-100">
                        <input type="number" name="nAlumnas" id="" placeholder="Número de alumnas" class="w-100">
                    </div>
                    <div class=" form-group">
                        <input type="number" name="nAlumnos" id="" placeholder="Número de alumnos" class="w-100">
                    </div>
                    <button class="btn btn-primary">Calcular</button>
                </form>
            </div>


            <?php
            $submit = false;
            if(isset($_GET['nAlumnas']) && isset($_GET['nAlumnos'])){
                $submit = true;
                $nAlumnas = $_GET['nAlumnas'];
                $nAlumnos = $_GET['nAlumnos'];

                $total = $nAlumnas + $nAlumnos;
                $porcentaje_alumnas = ($nAlumnas * 100) / $total;
                $porcentaje_alumnos = ($nAlumnos * 100) / $total;
            }
        ?>

            <div class="col-4">
                <h5>Resultados</h5>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Porcentaje de alumnas</th>
                            <th>Porcentaje de alumnos</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <?php 
                                if($submit){
                                    echo "<th>".$porcentaje_alumnas."%"."</th>".
                                        "<th>".$porcentaje_alumnos."%"."</th>";
                                }
                            ?>
                        </tr>
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