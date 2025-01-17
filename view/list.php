<?php
    require_once("../controller/TicketsController.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem</title>
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
                <th colspan="5">Tickets*</th>
            </tr>
            <tr>
                <th></th>
                <th>Tickets</th>
                <th>Status</th>
                <th>Data</th>
                <th>Título</th>
            </tr>
        </thead>
        <tbody>
            <?php $ticketController->index(); ?>
        </tbody>
    </table>
</body>
</html>