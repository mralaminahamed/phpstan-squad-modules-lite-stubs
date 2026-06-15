<?php

use StubsGenerator\Finder;

return Finder::create()
    ->in( array(
        'source/squad-modules-for-divi',
    ) )
    ->append(
        Finder::create()
            ->in(['source/squad-modules-for-divi'])
            ->files()
            ->depth('< 1')
            ->path('squad-modules-for-divi.php')
    )
     ->notPath('freemius')
    ->sortByName(true)
;
