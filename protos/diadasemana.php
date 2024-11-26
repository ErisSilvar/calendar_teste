<?php


if(isset($_GET['mes'])){

    $mes = $_GET['mes'];

    $data = $mes;
    $dia_da_semana = date('5', strtotime($data));
    $dia_semana_curto = date('l', strtotime($data));

    echo '<pre>'. $dia_da_semana. '        ' . $dia_semana_curto .'</pre>';


}