<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "lib_js_lazysizes".
 *
 * Auto generated 11-06-2016 15:54
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = [
    'title' => 'JS Library: lazysizes',
    'description' => 'This extension integrates the "lazysizes" javascript-library from https://github.com/aFarkas/lazysizes for responsive AND lazyloading images.',
    'category' => 'fe',
    'version' => '0.0.1',
    'state' => 'beta',
    'uploadfolder' => true,
    'createDirs' => '',
    'clearcacheonload' => true,
    'author' => 'Stephan Kellermayr',
    'author_email' => 'stephan.kellermayr@gmail.com',
    'author_company' => 'sonority.at - MULTIMEDIA ART DESIGN',
    'constraints' => [
        'depends' => [
            'typo3' => '7.6.0-7.99.99',
            'fluid_styled_content' => '7.6.0-',
            'fluid_styled_responsive_images' => '1.2.1-'
        ],
        'conflicts' => [
        ],
        'suggests' => [
        ],
    ],
];
