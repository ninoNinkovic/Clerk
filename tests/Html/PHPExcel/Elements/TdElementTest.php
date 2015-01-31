<?php namespace Maatwebsite\Clerk\Tests\Html\PHPExcel\Elements;

use Maatwebsite\Clerk\Adapters\PHPExcel\Html\Elements\TdElement;
use Maatwebsite\Clerk\Adapters\PHPExcel\Html\ReferenceTable;

class TdElementTest extends \PHPUnit_Framework_TestCase {


    public function tearDown()
    {
        \Mockery::close();
    }


    public function test_table_gets_parsed()
    {
        $dom = new \DOMElement('td', 'Patrick');

        $table = new ReferenceTable();

        // Fake as if we are inside a <table>
        $table->setColumn(
            $table->setStartColumn()
        );

        // Fake as if we are inside a <tr>
        $table->nextRow();

        $this->assertEquals('A', $table->getColumn());

        $sheet = $this->mockSheet();

        $element = new TdElement($sheet);
        $element->parse($dom, $table);

        // Flush the element
        $element->flush($table);

        $this->assertEquals('B', $table->getColumn());
    }


    /**
     * @return \Maatwebsite\Clerk\Sheet
     */
    public function mockSheet()
    {
        $sheet = \Mockery::mock('Maatwebsite\Clerk\Sheet');

        // the cell value should be set.
        $sheet->shouldReceive('setCellValue')->with('A1', 'Patrick', true)->once();

        return $sheet;
    }
}