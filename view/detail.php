<?php
    require_once("../controller/TicketsController.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhe do Ticket</title>
    <style>
        th {
            text-align: center;
            background-color: #6796bf;
            color: white;
            border: 1px solid #FFF;
        }

        tr:nth-child(even){
            background-color: #f2f2f2
        }

        table, th, td {
            
            border-collapse: collapse;
        }
</style>
</head>
<body>
    <table style="width: 100%">
        <thead>
            <tr>
                <th colspan="4">Visualização de Ticket</th>
            </tr>
            <tr>
                <th>Ticket</th>
                <th>Status</th>
                <th>Data</th>
                <th>Título</th>
            </tr>
        </thead>
        <tbody>
            <?php $ticketController->show($_GET["ticket_id"]); ?>
        </tbody>
        <tfoot>
            <tr>
                <th colspan="4">
                    <a href="/controller/TicketsController.php?action=list">Retornar</a>
                </th>
            </tr>
        </tfoot>
    </table>
</body>
</html>