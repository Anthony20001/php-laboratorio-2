<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Programa 3</title>
</head>

<body>
    <div class="container mt-4">
        <div class="row">
            <h3>
                3. Crear un programa en PHP + HTML que calcule el área de un círculo, se calcula con a
                siguiente formula:
                Area = π * r*r
                Sabiendo que π = 3.141592
            </h3>
        </div><br>
        <div class="row">
            <div class="col-3">
                <form action="index.php" method="get" class="d-grid gap-3">
                    <label for=" input">Introduzca el radio del círculo</label>
                    <input type="number" name="radio" id="input">
                    <input type="submit" value="Calcular" class="btn btn-outline-success">
                </form>
            </div>

            <div class="col-3">
                <h5>
                    <?php
                        if(isset($_GET['radio'])){
                            $radio = $_GET['radio'];
                            echo "El radio de ".$radio." = ".number_format(pi()*pow($radio, 2), 2);
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