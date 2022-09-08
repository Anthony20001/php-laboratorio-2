<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Programa 11</title>
</head>

<body>
    <div class="container mt-4">
        <div class="row">
            <h5>
                11. Elabore un programa que realice la conversión de cm. a pulgadas. Donde 1cm = 0.39737
                pulgadas
            </h5>
        </div>

        <div class="row mt-5 d-flex justify-content-between">
            <div class="col-4">
                <form action="index.php" method="get" class="d-block d-grid gap-3 w-100">
                    <div class="form-group w-100 d-flex gap-4">
                        <input type="number" name="cm" id="cm" placeholder="Centímetros" class="w-100">
                    </div>
                    <button class="btn btn-primary">Convertir</button>
                </form>
            </div>


            <?php
            $submit = false;
            if(isset($_GET['cm'])){
                $submit = true;
                $cm = $_GET['cm'];
                $pulg = $cm * 0.39737;
            }
        ?>

            <div class="col-4">
                <h5><strong>Resultado</strong></h5>
                <h5>
                    <?php
                        if($submit){
                            echo "<span class='text-success'>".$cm." centímetros "." = ".number_format($pulg, 2)." pulgadas."."</span>";
                        }
                    ?>
                </h5>
            </div>

        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>
</body>

</html>