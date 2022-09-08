<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Programa 5</title>
</head>

<body>
    <div class="container mt-4">
        <div class="row">
            <h3>
                5. Dado el nombre y 5 calificaciones de un alumno; construya un programa en PHP + HTML
                que imprima el nombre del alumno y el promedio de sus calificaciones
            </h3>
        </div><br>
        <div class=" row">
            <div class="col-3">
                <form action="index.php" method="get" class="d-grid gap-3">
                    <input type="text" name="nombre" id="" placeholder="Nombre"><br>
                    <h5>Calificaciones</h5>
                    <input type="number" name="score1" id="">
                    <input type="number" name="score2" id="">
                    <input type="number" name="score3" id="">
                    <input type="number" name="score4" id="">
                    <input type="number" name="score5" id="">
                    <input type="submit" value="Calcular" class="btn btn-outline-success">
                </form>
            </div>

            <div class="col-7">
                <h5>
                    <?php
                        if(
                            isset($_GET['score1']) && 
                            isset($_GET['score2']) && 
                            isset($_GET['score3']) &&
                            isset($_GET['score4']) && 
                            isset($_GET['score5'])){

                            $nombre = $_GET['nombre'];
                            $calificaciones = array($_GET['score1'], $_GET['score2'], $_GET['score3'], $_GET['score4'], $_GET['score5']);

                            $promedio = 0;
                            $total = 0;

                            for($i=0; $i<count($calificaciones); $i++){
                                $total += $calificaciones[$i];
                            }

                            $promedio = $total / count($calificaciones);

                            echo "Estimado(a) ".$nombre." : "."Su calificación promedio es: ".number_format($promedio, 2);
                        }
                    ?>
                </h5>
            </div>
        </div>

    </div>

    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>
</body>

</html>