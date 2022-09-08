<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Programa 4</title>
</head>

<body>
    <div class="container mt-4">
        <div class="row">
            <h3>
                4. Elaborar un programa en PHP + HTML que permita calcular el salario neto de un
                trabajador en función del número de horas trabajadas, pago por hora de trabajo y un
                descuento fijo al sueldo bruto del 20% (este valor es una constante). Los cálculos a
                efectuar para obtener el salario neto de un trabajador se muestran a continuación
            </h3>
            <h3>
                <ul>
                    <li>SalarioBruto = HorasTrabajadas * PagoPorHora</li>
                    <li>Descuento = 0.2 * SalarioBruto</li>
                    <li> SalarioNeto = SalarioBruto – Descuento</li>
                </ul>
            </h3>
        </div><br>
        <div class=" row">
            <div class="col-3">
                <form action="index.php" method="get" class="d-grid gap-3">
                    <input type="text" name="nombre" id="" placeholder="Nombre">
                    <input type="number" name="horas" id="" placeholder="Horas trabajadas">
                    <input type="number" name="pago_hora" id="" placeholder="Pago por hora">
                    <input type="submit" value="Calcular" class="btn btn-outline-success">
                </form>
            </div>

            <div class="col-7">
                <h5>
                    <?php
                        if(isset($_GET['nombre'])  && isset($_GET['horas']) && isset($_GET['pago_hora'])){
                            $nombre = $_GET['nombre'];
                            $horas = $_GET['horas'];
                            $pago_hora = $_GET['pago_hora'];

                            $salario_bruto = $horas * $pago_hora;
                            $descuento = 0.2 * $salario_bruto;
                            $salario_neto = $salario_bruto - $descuento;

                            echo "Estimado(a) ".$nombre." : "."Su salario neto es de ".number_format($salario_neto, 2)."$";
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