<?php


require 'ColumnGS.php';
$column = new ColumnGS(45, 30);



header("Content-Type: text/plain; charset=ISO-8859-1",true);
?>
    .column-full { width: <?php echo $column->column(16); ?>px; }
    .column-three-quarters { width: <?php echo $column->column(12); ?>px; }

    .column-half { width: <?php echo $column->column(8); ?>px; margin-right: 20px; }

    .column-quarter { width: <?php echo $column->column(4); ?>px; margin-right: 20px; }

    .column-sixteenth { width: <?php echo $column->column(1); ?>px; margin-right: 20px; }


    .space-left-big { margin-right: <?php echo $column->gap() * 2; ?>px; }
    .space-right-big { margin-right: <?php echo $column->gap() * 2; ?>px; }
    .space-left { margin-left: <?php echo $column->gap(); ?>px; }
    .space-right { margin-right: <?php echo $column->gap(); ?>px; }
    .space-left-small { margin-right: <?php echo $column->gap()/2; ?>px; }
    .space-right-small { margin-right: <?php echo $column->gap()/2; ?>px; }
