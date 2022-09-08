<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Programa 14</title>
</head>

<body>
    <div class="container mt-4">
        <div class="row">
            <h5>
                14. Se les dará un bono por antigüedad a los empleados de una tienda. Si tienen un año, se les
                dará $100; si tienen 2 años, $200, y así sucesivamente hasta los 5 años. Para los que
                tengan más de 5, el bono será de $1000. Realice un Programa en PHP + HTML que
                permita determinar el bono que recibirá un trabajador
            </h5>
        </div>

        <div class="row mt-5 d-flex justify-content-between">
            <div class="col-4">
                <form action="index.php" method="get" class="d-block d-grid gap-3 w-100">
                    <div class="form-group w-100 d-flex gap-4">
                        <input type="number" name="years" placeholder="Cantidad de personas" class="w-100">
                    </div>
                    <button class="btn btn-primary">Calcular bono de antiguedad</button>
                </form>
            </div>


            <?php
                $submit = false;
                if(isset($_GET['years'])){
                    $submit = true;
                    $years = $_GET['years'];
                    $bono = $years * 100;
                }
            ?>

            <div class="col-4">
                <?php
                    if($submit){
                        echo 
                            "<h5><strong>Presupuesto</strong></h5>".
                            "<h5>"."<span class='text-success'>".number_format($bono, 2)."$"."</span>"."</h5>";
                    }  
                ?>
            </div>

        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>
</body>

</html>