<?php /** @noinspection PhpUndefinedVariableInspection */

/***************************************************************
 * Extension Manager/Repository config file for ext "static_info_tables_pl".
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = [
    'title' => 'Static Info Tables (pl)',
    'description' => 'Polish (pl) language pack for the Static Info Tables providing localized names for countries, currencies and so on.',
    'category' => 'misc',
    'version' => '6.9.2',
    'state' => 'stable',
    'uploadfolder' => false,
    'createDirs' => '',
    'modify_tables' => 'static_countries,static_languages,static_currencies,static_territories',
    'clearcacheonload' => false,
    'author' => 'Ephraim Härer',
    'author_email' => 'mail@ephra.im',
    'author_company' => 'https://ephra.im',
    'constraints' => [
        'depends' => [
            'typo3' => '9.5.17-10.4.99',
            'static_info_tables' => '6.9.0-6.9.99',
            'php' => '7.2.0-0.0.0',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];

