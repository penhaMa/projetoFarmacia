<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta de Cliente - Farmácia</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php
    include 'index.php';
    session_start();
    $nomeCompleto       = $_SESSION['nomeCompleto'];
    $rg                 = $_SESSION['rg'];
    $telefone           = $_SESSION['telefone'];
    $temPlanoSaude      = $_SESSION['temPlanoSaude'];
    $planoSaude         = $_SESSION['planoSaude'];
    $usaFarmaciaPopular = $_SESSION['usaFarmaciaPopular'];
    $produtos           = $_SESSION['produtos'];

    $cad = new Cadastro($nomeCompleto, $rg, $telefone, $temPlanoSaude, $planoSaude, $usaFarmaciaPopular, $produtos);
    echo $cad;
?>

<a href="index.php"><button type="button">Voltar para o Cadastro</button></a>

</body>
</html>