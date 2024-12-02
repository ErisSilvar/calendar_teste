<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste de calendário</title>
    <style>
        td,
        th,
        table {
            border: 1px solid black;
            border-spacing: 0;
            border-collapse: collapse;
        }
    </style>
</head>

<body>
    <main>
        <form method="get" action="index.php">
            <input type="month" id="mes" name="mes"
                value="<?php echo isset($_GET['mes']) ? $_GET['mes'] : date('Y-m'); ?>">
            <input type="submit" value="Cadastrar">
        </form>

        <?php
        if (isset($_GET['mes'])) {

            $data = $_GET['mes'];


            $dias = date('1', strtotime($data));

            $diasmes = date('t', strtotime($data));

            $diassemana = date('w', strtotime($data));

            echo "<h2>Calendário " . $data = date('Y', strtotime($data)) . "</h2>";
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

            for ($i = 1; $i <= $diasmes; $i++) {
                echo "<td>" . $i . "</td>";

                if (($i + $diassemana) % 7 == 0) {
                    echo "</tr><tr>";


                }
            }


            for ($i = 0; $i < (7 - (($diasmes + $diassemana) % 7)); $i++) {
                echo "<td>&nbsp;</td>";
            }

            echo "</tr>";
            echo "</table>";


        }
        ?>
    </main>
</body>

</html>