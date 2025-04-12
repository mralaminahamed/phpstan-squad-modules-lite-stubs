<?php

return \StubsGenerator\Finder::create()
    ->in( array(
        'source/squad-modules-for-divi',
    ) )
    ->append(
        \StubsGenerator\Finder::create()
            ->in(['source/squad-modules-for-divi'])
            ->files()
            ->depth('< 1')
            ->path('squad-modules-for-divi.php')
    )
    // ->notPath('customizer')
    // ->notPath('debug')
    ->sortByName(true)
;
