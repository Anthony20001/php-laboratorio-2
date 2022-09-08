<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Programa 15</title>
</head>

<body>
    <div class="container mt-4">
        <div class="row">
            <h5>
                15. El banco “Pueblo desconocido” ha decidido aumentar el límite de crédito de las tarjetas de
                crédito de sus clientes, para esto considera que si su cliente tiene tarjeta tipo 1, el aumento
                será de 25 %; si tiene tipo 2, será de 35 %; si tiene tipo 3, de 40 %, y para cualquier otro
                tipo, de 50 %. Realice un Programa en PHP + HTML para determinar el nuevo límite de
                crédito que tendrá una persona en su tarjeta.
            </h5>
        </div>

        <div class="row mt-5 d-flex justify-content-between">
            <div class="col-4">
                <form action="index.php" method="get" class="d-block d-grid gap-3 w-100 form">
                    <div class="form-group w-100 d-block gap-4">
                        <select name="tipo_tarjeta" id="" class="form-control" placeholder="Elija el tipo de tarjeta"
                            required>
                            <option value="" selected disabled>Elija el tipo de tarjeta</option>
                            <option value="1">Tipo 1</option>
                            <option value="2">Tipo 2</option>
                            <option value="3">Tipo 3</option>
                            <option value="4">Tipo 4</option>
                            <option value="5">Tipo 5</option>
                            <option value="6">Tipo 6</option>
                        </select>
                        <input type="number" name="limite_credito" id="" placeholder="Introduzca el límite de crédito"
                            class="form-control mt-3" required>
                    </div>
                    <button class="btn btn-primary">Calcular</button>
                </form>
            </div>


            <?php
                $submit = false;
                
                if(isset($_GET['tipo_tarjeta']) && isset($_GET['limite_credito'])){
                    $submit = true;
                    $tipo_tarjeta = $_GET['tipo_tarjeta'];
                    $limite_credito = $_GET['limite_credito'];
                    $porcentaje_extra = 0;

                    switch($tipo_tarjeta){
                        case 1:
                            $limite_credito *= 1.25;
                            $porcentaje_extra = 25;
                            break;
                        case 2:
                            $limite_credito *= 1.35;
                            $porcentaje_extra = 35;
                            break;
                        case 3:
                            $limite_credito *= 1.40;
                            $porcentaje_extra = 40;
                            break;
                        default:
                            $limite_credito *= 1.50;
                            $porcentaje_extra = 50;
                    }
                    
                }
            ?>


            <div class="col-6">
                <?php
                    if($submit){
                        echo 
                            "<h5><strong>Nuevo límite crediticio de la tarjeta</strong></h5>".
                            "<h5>"."<span class='text-success'>".number_format($limite_credito, 2)."$"."</span>"."</h5>".
                            "<br><h5>"."Un ".$porcentaje_extra."% más de límite en su tarjeta de crédito."."</h5>";
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