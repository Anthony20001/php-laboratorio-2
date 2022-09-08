<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Programa 7</title>
</head>

<body>
    <div class="container mt-4">

        <div class="row">
            <div class="col-12">
                <h6>
                    7. En un hospital existen tres áreas: Ginecología, Pediatría, Traumatologia. El presupuesto
                    anual del hospital se reparte conforme a la sig. tabla:
                </h6>

                <table class="table w-50 mx-auto">
                    <thead>
                        <tr>
                            <th>Área</th>
                            <th>Porcentaje del presupuesto</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Ginecología</td>
                            <td>40%</td>
                        </tr>
                        <tr>
                            <td>Traumatología</td>
                            <td>30%</td>
                        </tr>
                        <tr>
                            <td>Pediatría</td>
                            <td>30%</td>
                        </tr>
                    </tbody>
                </table><br>

                <h6>Generar una tabla html con los resultados
                    Obtener la cantidad de dinero que recibirá cada área, para cualquier monto presupuestal.</h6>
            </div>
        </div><br><br>


        <div class="row">
            <div class="col-12">
                <form action="index.php" method="get" class="d-flex gap-4">
                    <div class="form-group h-100">
                        <h5>Presupuesto</h5>
                        <input type="number" name="presupuesto" id="" required class="h-100">
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
                (isset($_GET['presupuesto'])){
                    $submit = true;
                    $presupuesto = $_GET['presupuesto'];
                    $porcentaje_ginecologia = (40 * $presupuesto) / 100;
                    $porcentaje_traumatologia = $presupuesto * 0.30;
                    $porcentaje_pediatria = $presupuesto * 0.30;
                }
        ?>



        <div class="row mt-5">
            <div class="col-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Ginecología (40%)</th>
                            <th>Traumatología (30%)</th>
                            <th>Pediatría(30%)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            if($submit){
                                echo "<tr>".
                                        "<th>".number_format($porcentaje_ginecologia, 2)."$</th>".
                                        "<th>".number_format($porcentaje_traumatologia, 2)."$</th>".
                                        "<th>".number_format($porcentaje_pediatria, 2)."$</th>".
                                    "</tr>";
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>


        <!-- <div class="row mt-3">
            <div class="col-12">
                <?php
                     if($submit){
                        echo "<h4>Estimado(a) ".$nombre." : "."Su nota final es ".number_format($porcentaje_final, 2)."."."</h4>";
                     }
                ?>
            </div>
        </div> -->

    </div>

    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>
</body>

</html>