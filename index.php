<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste de calendário</title>
    <style>
        td {
            border: 1px solid black;
        }
    </style>
</head>

<body>
    <main>
        <form method="get" action="index.php">
            <input type="month" id="mes" name="mes">
            <input type="submit" value="Cadastrar">
        </form>
        <?php
        if (isset($_GET['mes'])) {

            $data = $_GET['mes'];


            $dias = date('1', strtotime($data));

            $diasmes = date('t', strtotime($data));

            $diassemana = date('w', strtotime($data));



            echo "<table>";
            echo "<tr>
                    <th>Dom</th>
                    <th>Seg</th>
                    <th>Ter</th>
                    <th>Qua</th>
                    <th>Qui</th>
                    <th>Sex</th>
                    <th>Sab</th>
                    </tr>";



            echo "<tr>";


            for ($i = 0; $i < $diassemana; $i++) {

                echo "<td>&nbsp;</td>";
            }
        }
        ?>
    </main>
</body>

</html>