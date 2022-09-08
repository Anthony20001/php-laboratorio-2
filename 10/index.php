<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Programa 10</title>
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <h5>
                10. Escriba un programa donde se ingrese el tiempo necesario para un cierto proceso en
                horas, minutos y segundos. Se calcule el costo total del proceso sabiendo que el costo por
                segundo es B/.0.25.
            </h5>
        </div>

        <div class="row mt-3 d-flex justify-content-between">
            <div class="col-4">
                <form action="index.php" method="get" class="d-block d-grid gap-3 w-100">
                    <h5>Introduzca los siguientes datos:</h5>
                    <div class="form-group w-100">
                        <input type="number" name="horas" id="" placeholder="horas" class="w-100">
                    </div>
                    <div class=" form-group">
                        <input type="number" name="minutos" id="" placeholder="minutos" class="w-100">
                    </div>
                    <div class=" form-group">
                        <input type="number" name="segundos" id="" placeholder="segundos" class="w-100">
                    </div>
                    <button class="btn btn-primary">Calcular</button>
                </form>
            </div>


            <?php
            $submit = false;
            if(isset($_GET['horas']) && isset($_GET['minutos']) && isset($_GET['segundos'])){
                $submit = true;
                $horas = $_GET['horas'];
                $minutos = $_GET['minutos'];
                $segundos = $_GET['segundos'];

                $costo = (($horas * 3600) + ($minutos * 60) + $segundos) * 0.25;
            }
        ?>

            <div class="col-4">
                <h5>
                    El costo total del proceso es de:
                </h5>
                <h4 class="text-primary">
                    <?php 
                            if($submit){
                                echo number_format($costo, 2)."$";
                            }
                        ?>
                </h4>

            </div>

        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>
</body>

</html>