<?php


require '../ColumnGS.php';
$column = new ColumnGS(68, 30);



header("Content-Type: text/plain; charset=ISO-8859-1",true);
?>
    .column-full { width: <?php echo $column->column(12); ?>px; }
    .column-eleven-twelfths { width: <?php echo $column->column(11); ?>px; }
    .column-ten-twelfths { width: <?php echo $column->column(10); ?>px; }
    .column-three-quarters { width: <?php echo $column->column(9); ?>px; }
    .column-two-thirds { width: <?php echo $column->column(8); ?>px; }
    .column-seven-twelfths { width: <?php echo $column->column(7); ?>px; }
    .column-half { width: <?php echo $column->column(6); ?>px; margin-right: <?php echo $column->gap(); ?>; }
    .column-five-twelfths { width: <?php echo $column->column(5); ?>px; }
    .column-two-fifths { width: 364px; }
    .column-third { width: <?php echo $column->column(4); ?>px; margin-right: <?php echo $column->gap(); ?>; }
    .column-quarter { width: <?php echo $column->column(3); ?>px; margin-right: <?php echo $column->gap(); ?>; }
    .column-fifth { width: 172px; margin-right: <?php echo $column->gap(); ?>; }
    .column-sixth { width: <?php echo $column->column(2); ?>px; margin-right: <?php echo $column->gap(); ?>; }
    .column-one-twelfths { width: <?php echo $column->column(1); ?>px; margin-right: <?php echo $column->gap(); ?>; }


    .space-left-big { margin-right: <?php echo $column->gap() * 2; ?>px; }
    .space-right-big { margin-right: <?php echo $column->gap() * 2; ?>px; }
    .space-left { margin-left: <?php echo $column->gap(); ?>px; }
    .space-right { margin-right: <?php echo $column->gap(); ?>px; }
    .space-left-small { margin-right: <?php echo $column->gap()/2; ?>px; }
    .space-right-small { margin-right: <?php echo $column->gap()/2; ?>px; }


    .space-bottom-big { margin-bottom: 40px }
    .space-bottom { margin-bottom: 20px }
    .space-bottom-small { margin-bottom: 10px }

    .content { margin: 0 auto; }