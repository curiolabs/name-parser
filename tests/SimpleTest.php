<?php

require_once __DIR__ . '/../vendor/autoload.php'; // Autoload files using Composer autoload

$parser = new CurioLabs\NameParser\Parser();
$input = 'Aadam Wright Bsc(Hons)';
$name = $parser->parse($input);
#echo $name->getSalutation();
#echo $name->getFirstname();
#echo $name->getLastname();
#echo $name->getMiddlename();
#echo $name->getNickname();
#echo $name->getInitials();
#echo $name->getSuffix();
print_r($name->getAll()); // all parts as an associative array

print_r($parser->gender($name));

