<?php

namespace CurioLabs\NameParser\Part;

class Lastname extends AbstractPart
{
    /**
     * camelcase the lastname
     *
     * @return string
     */
    public function normalize(): string
    {
        return $this->camelcase($this->getValue());
    }
}
