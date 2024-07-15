<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "svconnector_cornerstone".
 *
 * Auto generated 05-04-2017 18:01
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = [
    'title' => 'Connector service - JSON (Cornerstone)',
    'description' => 'Connector service for Cornerstone Reporting API JSON',
    'category' => 'services',
    'version' => '4.2.0',
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearcacheonload' => 0,
    'author' => 'Francois Suter (Idéative), Bastian Holzemn (teufels GmbH)',
    'author_email' => 'typo3@ideative.ch, digital@teufels.com',
    'author_company' => '',
    'constraints' =>
        [
            'depends' =>
                [
                    'typo3' => '11.5.0-12.4.99',
                    'svconnector' => '5.0.0-0.0.0',
                ],
            'conflicts' =>
                [
                ],
            'suggests' =>
                [
                ],
        ],
];

