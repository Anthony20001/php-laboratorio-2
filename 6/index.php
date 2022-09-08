<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Programa 6</title>
</head>

<body>
    <div class="container mt-4">

        <div class="row">
            <h6>
                6. Un alumno desea saber cuál será su calificación final en la materia de Algoritmos. Dicha
                calificación se compone de los siguientes porcentajes:
            </h6>

            <h6>
                <ul>
                    <li>55% del promedio de sus tres calificaciones parciales</li>
                    <li>30% de la calificación del examen final.</li>
                    <li>15% de la calificación de un trabajo final</li>
                </ul>
            </h6>
        </div><br><br>


        <div class="row">
            <div class="col-12">
                <form action="index.php" method="get" class="d-block justify-content-between">
                    <div class="d-flex gap-5">
                        <div class="form-group">
                            <h5>Nombre</h5>
                            <input type="text" name="nombre" id="" required>
                        </div>

                        <div class="form-group">
                            <h5>Parciales (55%)</h5>
                            <input type="number" name="nParcial1" id="" required>
                            <input type="number" name="nParcial2" id="" required>
                            <input type="number" name="nParcial3" id="" required>
                        </div>

                        <div class="form-group">
                            <h5>Examen final (30%)</h5>
                            <input type="number" name="nExamen" id="" required>
                        </div>

                        <div class=" form-group">
                            <h5>Trabajo final (15%)</h5>
                            <input type="number" name="nTrabajo" id="" required>
                        </div>
                    </div>

                    <div class="form-group mt-4">
                        <input type="submit" value="Calcular" class="btn btn-success">
                    </div>

                </form>
            </div>
        </div>

        <?php
                $submit = false;    
                
                if
                (
                    isset($_GET['nombre']) && 
                    isset($_GET['nParcial1']) && 
                    isset($_GET['nParcial2']) && 
                    isset($_GET['nParcial3']) &&
                    isset($_GET['nExamen']) && 
                    isset($_GET['nTrabajo'])
                )
                    
                {
                    $submit = true;
                    $nombre = $_GET['nombre'];
                    $porcentaje_parcial = (($_GET['nParcial1'] + $_GET['nParcial2'] + $_GET['nParcial3']) * 55) / 300;
                    $porcentaje_trabajo = ($_GET['nTrabajo'] * 15) / 100;
                    $porcentaje_examen = ($_GET['nExamen'] * 30) / 100;
                    $porcentaje_final = $porcentaje_parcial + $porcentaje_trabajo + $porcentaje_examen;
                }
        ?>



        <div class="row mt-5">
            <div class="col-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Parciales (55%)</th>
                            <th>Trabajo final (15%)</th>
                            <th>Examen final(30%)</th>
                            <th>Porcentaje obtenido</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            if($submit){
                                echo "<tr>".
                                        "<th>".number_format($porcentaje_parcial, 2)."%</th>".
                                        "<th>".number_format($porcentaje_trabajo, 2)."%</th>".
                                        "<th>".number_format($porcentaje_examen, 2)."%</th>".
                                        "<th>".number_format($porcentaje_final, 2)."%</th>".
                                    "</tr>";
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>


        <div class="row mt-3">
            <div class="col-12">
                <?php
                     if($submit){
                        echo "<h4>Estimado(a) ".$nombre." : "."Su nota final es ".number_format($porcentaje_final, 2)."."."</h4>";
                     }
                ?>
            </div>
        </div>

    </div>

    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>
</body>

</html>