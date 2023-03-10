<?php
    $meusCursos = file('lista-cursos.txt');
    $outrosCursos = file('cursos-php.txt');

    $arquivoCsv = fopen('cursos.csv', 'w');

    foreach ($meusCursos as $curso) {
        $linha = [trim(utf8_encode($curso)), 'Sim'];

        fputcsv($arquivoCsv, $linha, ';');
    }

    foreach ($outrosCursos as $curso) {
        $linha = [trim(utf8_encode($curso)), 'Não'];

        fputcsv($arquivoCsv, $linha, ';');
    }

    fclose($arquivoCsv);