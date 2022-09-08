<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Programa 1</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <h3 class="text-center mt-3">1. Crear un programa que me permita sumar dos números flotantes.</h3>
        </div>

        <?php  
            if(isset($_GET['numero1']) && isset($_GET['numero2'])){
                $numero1 = $_GET['numero1'];
                $numero2 = $_GET['numero2'];
                $suma = $numero1 + $numero2;
                echo '<div class="row mt-4"><h4>'.$numero1." + ".$numero2." = ".$suma."</h4>";
            }
        ?>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
        </script>
</body>

</html>