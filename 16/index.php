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
    <style>
    li {
        list-style: none;
    }
    </style>

    <div class="container mt-1">
        <div class="row">
            <h5>
                16. Crear un programa en PHP + HTML que lea un valor N y que imprima un triángulo de
                asteriscos, como se muestra a continuación, si el valor leído es 5:
            </h5>
            <ul>
                <li>*</li>
                <li>**</li>
                <li>***</li>
                <li>****</li>
                <li>*****</li>
            </ul>
        </div>

        <div class="row mt-2 d-flex justify-content-between">
            <div class="col-4">
                <form action="index.php" method="get" class="d-block d-grid gap-3 w-100">
                    <div class="form-group w-100 d-flex gap-4">
                        <input type="number" name="lenght" placeholder="Tamaño de la pirámide" class="w-100">
                    </div>
                    <button class="btn btn-primary">Aceptar</button>
                </form>
            </div>



            <div class="col-4">
                <h5><strong>Resultado</strong></h5>
                <?php
                    $submit = false;
                    if(isset($_GET['lenght'])){
                        $submit = true;
                        $lenght = $_GET['lenght'];

                    for($i=0; $i<$lenght; $i++){
                        for($j=0; $j<=$i; $j++){
                            echo "<span>*</span>";
                        }
                        echo "<br>";
                    }
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