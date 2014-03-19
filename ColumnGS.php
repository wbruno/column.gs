<?php
/**
 * @author William Moraes <wbrunom@gmail.com>
 */

class ColumnGS {
    private $gap;
    private $column;
    private $total;

    public function __construct($column, $gap){
        $this->column = $column;
        $this->gap = $gap;
        $this->total = $this->column * 12 + $this->gap * 11;
    }
    public function column($n) {
        return ( $n * $this->column ) + ( $n-1 ) * $this->gap;
    }
    public function gap() {
        return $this->gap;
    }
}