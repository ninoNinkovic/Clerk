<?php

use Maatwebsite\Clerk\Excel\Adapters\PHPExcel\Sheet;
use Maatwebsite\Clerk\Excel\Adapters\PHPExcel\Workbook;
use Maatwebsite\Clerk\Excel\Cells\Cell;
use Maatwebsite\Clerk\Excel\Html\ReferenceTable;
use Maatwebsite\Clerk\Excel\Html\Styles\BorderRightStyle;

class BorderRightStyleTest extends \PHPUnit_Framework_TestCase
{
    public function test_border_right_style()
    {
        $value = '1px thick 000000';
        $cell  = $this->mockCell();
        $sheet = $this->mockSheet();
        $table = new ReferenceTable();

        $attribute = new BorderRightStyle($sheet);
        $attribute->parse($cell, $value, $table);

        $this->assertContains('000000', $cell->borders()->getRight()->getColor());
        $this->assertContains('thick', $cell->borders()->getRight()->getStyle());
    }

    /**
     * @return Cell
     */
    protected function mockCell()
    {
        return new Cell('name');
    }

    /**
     * @return Sheet
     */
    protected function mockSheet()
    {
        return new Sheet(new Workbook('title'), 'title');
    }
}
