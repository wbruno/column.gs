<?php

header("Content-Type: text/plain; charset=ISO-8859-1",true);

function column($n) {
    $gap = 30;
    $column = 60;
    
    return ( $n * $column ) + ( $n-1 ) * $gap;
}

?>
    .column-full { width: <?php echo column(12); ?>px; }
    .column-eleven-twelfths { width: <?php echo column(11); ?>px; }
    .column-ten-twelfths { width: <?php echo column(10); ?>px; }
    .column-three-quarters { width: <?php echo column(9); ?>px; }
    .column-two-thirds { width: <?php echo column(8); ?>px; }
    .column-seven-twelfths { width: <?php echo column(7); ?>px; }
    .column-half { width: <?php echo column(6); ?>px; }
    .column-five-twelfths { width: <?php echo column(5); ?>px; }
    .column-third { width: <?php echo column(4); ?>px; }
    .column-quarter { width: <?php echo column(3); ?>px; }
    .column-sixth { width: <?php echo column(2); ?>px; }
    .column-one-twelfths { width: <?php echo column(1); ?>px; }


    .space-left { margin-left: <?php echo $gap; ?>px; }
    .space-right { margin-right: <?php echo $gap; ?>px; }
