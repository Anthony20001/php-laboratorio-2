<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Programa 8</title>
</head>

<body>
    <div class="container mt-4">

        <div class="row">
            <div class="col-12">
                <h6>
                    8. Tres personas deciden invertir su dinero para fundar una empresa. Cada una de ellas
                    invierte una cantidad distinta. Obtener el porcentaje que cada quien invierte con respecto a
                    la cantidad total invertida
                </h6>
            </div>
        </div><br><br>


        <div class="row">
            <div class="col-12">
                <h3 class="text-center">Inversiones</h3><br>
                <form action="index.php" method="get" class="d-block">
                    <div>
                        <div class="form-group">
                            <h5>Inversionista 1</h5>
                            <input type="text" name="nombre1" id="" required placeholder="Nombre" class="mb-3">
                            <input type="number" name="dinero1" id="" required placeholder="Inversión">
                        </div>
                        <div class="form-group">
                            <h5>Inversionista 2</h5>
                            <input type="text" name="nombre2" id="" required placeholder="Nombre" class="mb-3">
                            <input type="number" name="dinero2" id="" required placeholder="Inversión">
                        </div>
                        <div class="form-group">
                            <h5>Inversionista 3</h5>
                            <input type="text" name="nombre3" id="" required placeholder="Nombre" class="mb-3">
                            <input type="number" name="dinero3" id="" required placeholder="Inversión">
                        </div>
                    </div>

                    <div class="form-group">
                        <input type="submit" value="Aceptar" class="btn btn-success">
                    </div>
                </form>
            </div>
        </div>

        <?php
                $submit = false;    
                
                if
                (
                    isset($_GET['nombre1']) &&
                    isset($_GET['nombre2']) &&
                    isset($_GET['nombre3']) &&
                    isset($_GET['dinero1']) &&
                    isset($_GET['dinero2']) &&
                    isset($_GET['dinero3'])
                )
                {
                    $submit = true;

                    $nombre1 = $_GET['nombre1'];
                    $inversion1 = $_GET['dinero1'];

                    $nombre2 = $_GET['nombre2'];
                    $inversion2 = $_GET['dinero2'];

                    $nombre3 = $_GET['nombre3'];
                    $inversion3 = $_GET['dinero3'];

                    $total = $inversion1 + $inversion2 + $inversion3;
                }else{
                    echo "<script>alert('Error');</script>";
                }
        ?>



        <div class="row mt-5">
            <div class="col-12">
                <h3 class="text-center">Porcentaje de inversiones</h3><br>
                <table class="table">
                    <thead>
                        <tr>
                            <?php 
                                if($submit){
                                    echo "<th>".$nombre1."</th>".
                                    "<th>".$nombre2."</th>".
                                    "<th>".$nombre3."</th>";
                                }
                            ?>

                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            if($submit){
                                echo "<tr>".
                                        "<th>".number_format(($inversion1*100)/$total, 2)."%</th>".
                                        "<th>".number_format(($inversion2*100)/$total, 2)."%</th>".
                                        "<th>".number_format(($inversion3*100)/$total, 2)."%</th>".
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