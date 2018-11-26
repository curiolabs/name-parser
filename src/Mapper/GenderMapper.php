<?php

namespace CurioLabs\NameParser\Mapper;

use CurioLabs\NameParser\Part\AbstractPart;
use CurioLabs\NameParser\Part\Gender;
use CurioLabs\NameParser\Name;


class GenderMapper extends AbstractMapper
{
    protected $languages = [];
    protected $salutations = [];
    protected $firstnames = [];

    public function __construct($languages, array $salutations, array $firstnames)
    {
        $this->languages = $languages;
        $this->salutations = $salutations;
        $this->firstnames = $firstnames;
    }

    /**
     * map suffixes in the parts array
     *
     * @param array $parts the name parts
     * @return array the mapped parts
     */
    public function map(array $parts): array
    {
        $name = new Name($parts);

        $gender = '';

        // Try to derive gender by salutation (Mr, Mrs etc.)
        if ($name->getSalutation()) {
            $input = strtoupper($name->getSalutation());
            $array = $this->languages[0]->getGenderSalutations();
            foreach ($array as $key => $val) {
                if ($input == strtoupper($key)) {
                    $parts[] = new Gender($val);
                    break;
                }
            }
        }

        // Try to derive gender by first name (Steven, Mark etc.)
        if ($gender == '') {
            if ($name->getFirstname()) {
                $input = strtoupper($name->getFirstname());
                $array = $this->languages[0]->getGenderFirstnames();
                foreach ($array as $key => $val) {
                    if ($input == $key) {
                        $parts[] = new Gender($val);
                        break;
                    }
                }
            }
        }

        return $parts;
    }

}
