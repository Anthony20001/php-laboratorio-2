<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Programa 12</title>
</head>

<body>
    <div class="container mt-4">
        <div class="row">
            <h5>
                13. “La langosta ahumada” es una empresa dedicada a ofrecer banquetes; sus tarifas son las
                siguientes: el costo de platillo por persona es de $95.00, pero si el número de personas es
                mayor a 200 pero menor o igual a 300, el costo es de $85.00. Para más de 300 personas el
                costo por platillo es de $75.00. Se requiere un Programa PHP + HTML que ayude a
                determinar el presupuesto.
            </h5>
        </div>

        <div class="row mt-5 d-flex justify-content-between">
            <div class="col-4">
                <form action="index.php" method="get" class="d-block d-grid gap-3 w-100">
                    <div class="form-group w-100 d-flex gap-4">
                        <input type="number" name="cPersonas" placeholder="Cantidad de personas" class="w-100">
                    </div>
                    <button class="btn btn-primary">Calcular presupuesto</button>
                </form>
            </div>


            <?php
                $submit = false;
                if(isset($_GET['cPersonas'])){
                    $submit = true;
                    $cPersonas = $_GET['cPersonas'];
                    if($cPersonas >= 1 && $cPersonas <= 200){
                        $presupuesto = $cPersonas * 95;
                    }elseif($cPersonas > 200 && $cPersonas <= 300){
                        $presupuesto = $cPersonas * 85;
                    }elseif($cPersonas > 300){
                        $presupuesto = $cPersonas * 75;
                    }else{
                        echo "<script>alert('Introduzca una cantidad de personas válida.')</script>";
                    }
                }
            ?>

            <div class="col-4">
                <?php
                    if($submit){
                        echo 
                            "<h5><strong>Presupuesto</strong></h5>".
                            "<h5>"."<span class='text-success'>".number_format($presupuesto, 2)."$"."</span>"."</h5>";
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