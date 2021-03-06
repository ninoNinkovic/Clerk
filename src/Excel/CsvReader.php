<?php

namespace Maatwebsite\Clerk\Excel;

/**
 * Interface CsvReader.
 */
interface CsvReader
{
    /**
     * Set CSV delimiter.
     *
     * @param $delimiter
     *
     * @return Reader
     */
    public function setDelimiter($delimiter);

    /**
     * Set CSV enclosure.
     *
     * @param $enclosure
     *
     * @return Reader
     */
    public function setEnclosure($enclosure);
}
