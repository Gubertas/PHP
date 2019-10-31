<?php
$bin_vol = 40;
$bin_heap_vol = rand(5,20);
$trash_per_day = 15;

$days = floor(($bin_vol + $bin_heap_vol) / $trash_per_day)  ;
?>
<html>

    <head>
        <title> naGa <?php print date('Y-m-d', strtotime('+' . rand(1, 5) . 'years')); ?></title>

    </head>
    <body>

        <h1>Siukslines prognoze </h1>
        <p>Siuksliadezei telpa <?php print $bin_vol; ?></p>
        <p>Boba tyli kol siuksliu virsyja nedaugiau nei <?php print $bin_heap_vol; ?></p>
        <h3>reiskia galiu dar ilsetis <?php print $days; ?> d.</h3>


    </body> 

</html>


