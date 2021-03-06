<?php

namespace Maatwebsite\Clerk\Pdf\Documents;

use Maatwebsite\Clerk\Pdf\Pages\Text;
use Maatwebsite\Clerk\Traits\CallableTrait;

class Header
{
    use CallableTrait;

    /**
     * @var Text
     */
    protected $text;

    /**
     * @param Text $text
     */
    public function __construct(Text $text)
    {
        $this->text = $text;
    }

    /**
     * @return Text
     */
    public function getText()
    {
        return $this->text->getText();
    }

    /**
     * @param Text $text
     */
    public function setText(Text $text)
    {
        $this->text = $text;
    }
}
