<html>

    <head>
        <title> NAGA <?php print date('Y-m-d', strtotime('+' . rand(1, 5) . 'years')); ?></title>
        <style>
            .center {
                display:flex;
                justify-content: center;
                align-items: center;
                flex-direction: column;
            }
            .bomb {
                background-size: <?php print date('s'); ?>%;
                background-repeat: no-repeat;
                height: 500px;
                width: 500px;
                background-image: url('assets/images/bomb-clipart-cherrybomb.png');
            }
            .bomb-00 {
                background-size: contain;
                background-image: url('assets/images/HALLOWEEN.gif');
            </style>
        </head>
        <body class="center">
            <div class="bomb bomb-<?php print date('s'); ?>"></div>
            <p><?php print date('s'); ?></p>
        </body>


    </html>






