<?php
$sudas1 = (rand(1, 100));

$sudas2 = (rand(1, 100));
$sudas3 = (rand(1, 100));
$sudas4 = (rand(1, 100));
?>
<html>

    <head>
        <title> NAGA <?php print date('Y-m-d', strtotime('+' . rand(1, 5) . 'years')); ?></title>

    </head>
    <body>
        <ul>
            <li>skolos skasicuokle<?php print $sudas1; ?></li>
            <li>jei paemei<?php print $sudas2; ?></li>
            <li>su dviem kabanciais grazinsi<?php print $sudas3; ?></li>
            <li>su vienu kabanciu grazinsi<?php print $sudas4; ?></li>

        </ul>
    </body> 

</html>


