<?php
//desativa mensagens de erro
error_reporting(0);

//informa nome do arquivo de logs
$filename = 'avisos.json';
//abre o arquivo json
$data = file_get_contents($filename);
//transforma o objeto em um array
$users = json_decode($data);
//invertendo o array
$users = array_reverse($users);

$RegistrosPorPagina = 25;

if (!isset($_GET["PaginaAtual"])) {
    $PaginaAtual = 1;
} else {
    $PaginaAtual = $_GET["PaginaAtual"];
}
$TotalDeRegistros = (count($users) - 1);
$TotalDePaginas = ceil($TotalDeRegistros / $RegistrosPorPagina);
$PrimeiroRegistro = (($PaginaAtual * $RegistrosPorPagina) - $RegistrosPorPagina);
//echo $PrimeiroRegistro . '|' . ($PrimeiroRegistro + $RegistrosPorPagina);

$link = '';
for ($i = 1; $i <= $TotalDePaginas; $i++) {
    $link .= ' <a href="painel.php?PaginaAtual=' . $i . '">' . $i . '</a> |';
};
$users2 = array_slice($users, $PrimeiroRegistro, $RegistrosPorPagina);

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
    <title><?php echo count($users) ?> Downloads!</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <meta http-equiv="refresh" content="30">
    <style>
    #tbstyle {
        font-family: Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 90%;
        font-size: 12px;
        overflow-wrap: break-word;
    }


    #tbstyle td {
        font-size: 12px;
        background-color:
            #393c39;
        color:
            #22fb00;
        text-align: center;
    }

    a {
        color: #22fb00;
    }

    body {
        background-color: #393c39;
    }

    p {
        color: #22fb00;
    }

    #tbstyle th {
        border: 1px solid #ddd;
        padding: 8px;

    }

    #tbstyle tr:nth-child(even) {
        background-color:
            #f2f2f2;
    }

    #tbstyle tr:hover {
        background-color:
            #ddd;
    }

    hr {
        border-top: 1px solid blank;
    }

    #tbstyle th {
        padding-top: 10px;
        padding-bottom: 10px;
        background-color:
            #393c39;
        color:
            #22fb00;
    }
    </style>
</head>

<body>


    <br>
    <center>
        <p><?php echo count($users) ?> Downloads!</p>

        <table id="tbstyle" .center>
            <tbody>
                <tr>
                    <th>Visitor ID</th>
                    <th>Data</th>
                    <th>User-Agent</th>
                    <th>Linguagem</th>
                    <th>IP</th>
                    <th>Cidade</th>
                    <th>Estado</th>
                    <th>País</th>
                    <th>Celular?</th>
                </tr>
                <?php foreach ($users2 as $user) { ?>
                <tr>
                    <td> <?= $user->visitorId; ?> </td>
                    <td> <?= $user->date; ?> </td>
                    <td> <?= $user->ua; ?> </td>
                    <td> <?= $user->language; ?> </td>
                    <td> <?= $user->ip; ?> </td>
                    <td> <?= $user->city; ?> </td>
                    <td> <?= $user->region; ?> </td>
                    <td> <?= $user->country; ?> </td>
                    <td> <?= $user->mobile; ?> </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
        <hr>
        <?= $link; ?>
    </center>

</body>

</html>