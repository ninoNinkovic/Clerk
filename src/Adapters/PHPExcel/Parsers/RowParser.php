<?php namespace Maatwebsite\Clerk\Adapters\PHPExcel\Parsers;

use PHPExcel_Cell;
use PHPExcel_Worksheet_Row;
use Maatwebsite\Clerk\Adapters\PHPExcel\Cell;
use Maatwebsite\Clerk\Adapters\ParserSettings;
use Maatwebsite\Clerk\Collections\CellCollection;

class RowParser {

    /**
     * @var ParserSettings
     */
    protected $settings;

    /**
     * @var array
     */
    protected $heading;

    /**
     * @param ParserSettings $settings
     * @param array          $heading
     */
    public function __construct(ParserSettings $settings, array $heading = array())
    {
        $this->settings = $settings;
        $this->heading = $heading;
    }

    /**
     * @param PHPExcel_Worksheet_Row $row
     * @return CellCollection
     */
    public function parse(PHPExcel_Worksheet_Row $row)
    {
        $iterator = $row->getCellIterator();
        $iterator->setIterateOnlyExistingCells($this->settings->getIgnoreEmpty());

        foreach ($iterator as $index => $cell)
        {
            $index = ($this->settings->getHasHeading() && isset($this->heading[$index])) ? $this->heading[$index] : $this->getIndexFromColumn($cell);

            $cells[$index] = new Cell($cell, $index, $this->settings);
        }

        return new CellCollection($cells);
    }

    /**
     * Get index from column
     * @param $cell
     * @return mixed
     */
    protected function getIndexFromColumn($cell)
    {
        return PHPExcel_Cell::columnIndexFromString($cell->getColumn());
    }
}