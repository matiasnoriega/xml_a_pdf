<?php

include('vendor/autoload.php');

$mpdf = new \Mpdf\Mpdf();
$simbolos = simplexml_load_file($_FILES['archivo']['tmp_name']);

$html ="";

foreach($simbolos as $simbolo){
    $html.= '<table style="width:50%; border:1px solid black">';
    
    $html.= '<tr><td style="width:100%; border:1px solid black; text-align: center"><h1>'. htmlentities($simbolo->nombreSimbolo). '</h1></td></tr>';
    $html.= '<tr><td style="width:100%; border:1px solid black; padding: 2%"><strong>Noci&oacute;n:</strong><br><ul>';

    foreach($simbolo->Nociones->Nocion as $nocion){
        $html.= '<li>'.htmlentities($nocion).'</li>';
    }
    $html.= '</ul></td></tr>';
    $html.= '<tr><td style="width:100%; border:1px solid black; padding: 2%"><strong>Impacto:</strong><br><ul>';

    foreach($simbolo->Impactos->Impacto as $impacto){
        $html.= '<li>'.htmlentities($impacto).'</li>';
    }
    $html.= '</ul></td></tr>';
    $html.= '</table><br>';
}

$mpdf->WriteHTML($html, 0);
$mpdf->Output();