<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Programa 2</title>
</head>

<body>
    <div class="container">
        <div class="row mt-3">
            <h3 class="text-center">
                2. Crear un programa que me permita leer dos números del teclado, y me calcule la suma,
                resta, multiplicación y división.
            </h3>
        </div>

        <br>
        <div class="row d-flex justify-content-between">

            <div class="col-3">
                <form action="index.php" method="get" id="formulario" class="form d-grid gap-3">
                    <input type="number" name="numero1" class="form-group w-100">
                    <input type="number" name="numero2" class="form-group">
                    <input type="submit" value="Aceptar" class="btn btn-outline-primary form-group">
                </form>
            </div>

            <div class="col-3">
                <?php
                    if(isset($_GET['numero1']) && isset($_GET['numero2'])){
                        $numero1 = $_GET['numero1'];
                        $numero2 = $_GET['numero2'];
                        echo "<h4>".$numero1." + ".$numero2." = ".$numero1+$numero2."</h4>";
                        echo "<h4>".$numero1." - ".$numero2." = ".$numero1-$numero2."</h4>";
                        echo "<h4>".$numero1." * ".$numero2." = ".$numero1*$numero2."</h4>";
                        
                        if($numero2 != 0){
                            echo "<h4>".$numero1." / ".$numero2." = ".number_format($numero1/$numero2, 2)."</h4>";
                        }else{
                            echo '<div class="alert alert-primary" role="alert">
                                No se puede dividir por cero.
                            </div>';
                        }
                    }
                ?>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>
    <!--<script src="../js/app.js" type="text/javascript"></script>-->
</body>

</html>