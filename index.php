<?php
$atstumas = rand(1, 500);

$sanaudos = 7.5;

$kaina = 1.3;

$isviso_degalu = round(($atstumas * $sanaudos) / 100, 2);

$tripo_kaina = round($isviso_degalu * $kaina, 2);

$n1 = 'Nuvaziuota distancija ';
$n2 = 'sunaudota ' . $atstumas . 'kuro';
$n3 = 'kaina ' . $tripo_kaina . 'narnijos valiuta';
?>
<html>

    <head>
        <title> naGa <?php print date('Y-m-d', strtotime('+' . rand(1, 5) . 'years')); ?></title>

    </head>
    <body>

        <h1>DEGALAi </h1>
        <ul>
            <li><?php print $n1; ?></li> 
            <li><?php print $n2; ?></li>
            <li><?php print $n3; ?></li>
        </ul>

    </body> 

</html>


