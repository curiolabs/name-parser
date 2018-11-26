<?php

namespace CurioLabs\NameParser\Language;

use CurioLabs\NameParser\LanguageInterface;

class English implements LanguageInterface
{
    const SUFFIXES = [
        '1st' => '1st',
        '2nd' => '2nd',
        '3rd' => '3rd',
        '4th' => '4th',
        '5th' => '5th',
        'i' => 'I',
        'ii' => 'II',
        'iii' => 'III',
        'iv' => 'IV',
        'v' => 'V',
        'apr' => 'APR',
        'cme' => 'CME',
        'dmd' => 'DMD',
        'jr' => 'Jr',
        'junior' => 'Junior',
        'ma' => 'MA',
        'md' => 'MD',
        'pe' => 'PE',
        'phd' => 'PhD',
        'rph' => 'RPh',
        'senior' => 'Senior',
        'sr' => 'Sr',
        'msc' => 'MSc',
        'bsc' => 'BSc',
        'bsc(hons)' => 'BSc (Hons)',
        'ba' => 'B.A.',
        'esq' => 'Esq',
    ];

    const SALUTATIONS = [
        'dr' => 'Dr.',
        'fr' => 'Fr.',
        'madam' => 'Madam',
        'master' => 'Mr.',
        'miss' => 'Miss',
        'mister' => 'Mr.',
        'mr' => 'Mr.',
        'mrs' => 'Mrs.',
        'ms' => 'Ms.',
        'mx' => 'Mx.',
        'rev' => 'Rev.',
        'reverend' => 'Rev.',
        'honorable' => 'Hon.',
        'president' => 'Pres.',
        'governor' => 'Gov',
        'governer' => 'Gov',
        'super intendent' => 'Supt.',
        'representatitve' => 'Rep.',
        'senator' => 'Sen.',
        'ambassador' => 'Amb.',
        'treasurer' => 'Treas.',
        'secretary' => 'Sec.',
        'private' => 'Pvt.',
        'corporal' => 'Cpl.',
        'sargent' => 'Sgt.',
        'major' => 'Maj.',
        'captain' => 'Capt.',
        'commander' => 'Cmdr.',
        'lieutenant' => 'Lt.',
        'lieutenant colonel', 'Lt. Col.',
        'colonel' => 'Col.',
        'general' => 'Gen.',
        'ing' => 'Ing.',
        'phdr' => 'PhDr',
        'sir' => 'Sir',
        'lord' => 'Lord',
        'lady' => 'Lady',
        'baron' => 'Baron',
        'baroness' => 'Baroness',

        // ES
        'senor' => 'Senor',
        'senora' => 'Senora',
        'senorita' => 'Senorita',
        'don' => 'Don',
        'dona' => 'Dona',
        'doctora' => 'Doctora',
        'professora' => 'Professora',

        // DK
        'fru' => 'Fru',

        // FI
        'rouva' => 'Rouva',
        'rva' => 'Rva',
        'herra' => 'Herra',

        // FR
        'madame' => 'Madame',
        'mme' => 'Mme',
        'mademoiselle' => 'Mademoiselle',
        'mlle' => 'Mlle',
        'monsiuer' => 'Monsiuer',

        // IT
        'sig.ra' => 'Sig.ra',
        'signora' => 'Signora',
        'signor' => 'Signor',
        'sig' => 'Sig',

        // NL
        'mevrouw' => 'Mevrouw',
        'mevr' => 'Mevr',
        'mw' => 'Mw',
        'de heer' => 'De Heer',

        // PL
        'pani' => 'Pani',
        'pan' => 'Pan',

        // PT
        'senhora' => 'Senhora',
        'sra' => 'Sra',
        'senhor' => 'Senhor',
        'sr' => 'Sr',
    ];

    const LASTNAME_PREFIXES = [
        'da' => 'da',
        'de' => 'de',
        'del' => 'del',
        'della' => 'della',
        'der' => 'der',
        'di' => 'di',
        'du' => 'du',
        'la' => 'la',
        'pietro' => 'pietro',
        'st' => 'st.',
        'ter' => 'ter',
        'van' => 'van',
        'vanden' => 'vanden',
        'vere' => 'vere',
        'von' => 'von',

    ];


    const GENDER_SALUTATIONS = [
        'Fr.' => 'F',
        'Madam' => 'F',
        'Mr.' => 'M',
        'Miss' => 'F',
        'Mrs.' => 'F',
        'Ms.' => 'F',
        'Rev.' => 'M',
        'Sir' => 'M',
        'Lord' => 'M',
        'Lady' => 'F',
        'Baron' => 'M',
        'Baroness' => 'F',


        // ES
        'Senor' => 'M',
        'Senora' => 'F',
        'Senorita' => 'F',
        'Don' => 'M',
        'Dona' => 'F',
        'Doctora' => 'F',
        'Professora' => 'F',

        // DK
        'Fru' => 'F',

        // FI
        'Rva' => 'F',
        'Rouva' => 'F',
        'Herra' => 'M',

        // FR
        'Madame' => 'F',
        'Mme' => 'F',
        'Mademoiselle' => 'F',
        'Mlle' => 'F',
        'Monsiuer' => 'M',

        // DE
        'Frau' => 'F',
        'Fraulein' => 'F',
        'Frau Doktor' => 'F',
        'Fr' => 'F',
        'Herr' => 'M',
        'Herr Doktor' => 'M',

        // IT
        'Sig.ra' => 'F',
        'Signora' => 'F',
        'Signor' => 'M',
        'Sig' => 'M',

        // NL
        'Mevrouw' => 'F',
        'Mevr' => 'F',
        'Mw' => 'F',
        'De Heer' => 'M',

        // PL
        'Pani' => 'F',
        'Pan' => 'M',

        // PT
        'Senhora' => 'F',
        'Sra' => 'F',
        'Senhor' => 'M',
        'Sr' => 'M',

    ];

    const GENDER_FIRSTNAMES = [
        'AAD' =>  'M',
        'AADAM' =>  'M',
        'AADEN' =>  'M',
        'AADJE' =>  'F',
        'AADU' =>  'M',
        'AAFKE' =>  'F',
        'AAFKEA' =>  'F',
        'AAFKO' =>  'M',
        'AAGE' =>  'M',
        'AAGJE' =>  'F',
        'AAGOT' =>  'F',
        'AAGOTH' =>  'F',
    ];

    public function getSuffixes(): array
    {
        return self::SUFFIXES;
    }

    public function getSalutations(): array
    {
        return self::SALUTATIONS;
    }

    public function getLastnamePrefixes(): array
    {
        return self::LASTNAME_PREFIXES;
    }

    public function getGenderSalutations(): array
    {
        return self::GENDER_SALUTATIONS;
    }

    public function getGenderFirstnames() : array
    {
        return self::GENDER_FIRSTNAMES;
    }
}
