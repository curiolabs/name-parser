<?php

namespace CurioLabs\NameParser\Mapper;

use CurioLabs\NameParser\Part\AbstractPart;
use CurioLabs\NameParser\Part\Initial;

/**
 * single letter, possibly followed by a period
 */
class InitialMapper extends AbstractMapper
{
    protected $matchLastPart = false;

    public function __construct(bool $matchLastPart = false)
    {
        $this->matchLastPart = $matchLastPart;
    }

    /**
     * map intials in parts array
     *
     * @param array $parts the name parts
     * @return array the mapped parts
     */
    public function map(array $parts): array
    {
        $last = count($parts) - 1;

        foreach ($parts as $k => $part) {
            if ($part instanceof AbstractPart) {
                continue;
            }

            if (!$this->matchLastPart && $k === $last) {
                continue;
            }

            if ($this->isInitial($part)) {
                $parts[$k] = new Initial($part);
            }
        }

        return $parts;
    }

    /**
     * @param string $part
     * @return bool
     */
    protected function isInitial(string $part): bool
    {
        $length = strlen($part);

        if (1 === $length) {
            return true;
        }

        return ($length === 2 && substr($part, -1) ===  '.');
    }
}
