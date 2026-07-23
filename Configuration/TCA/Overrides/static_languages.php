<?php
declare(strict_types=1);

defined('TYPO3') || die;

use RENOLIT\StaticInfoTablesPl\Provider\TcaProvider;

call_user_func(
    function ($additionalFields, $dataSetName) {
        TcaProvider::generateAndRegisterTca($additionalFields, $dataSetName);
    },
    [
        'lg_name_en' => 'lg_name_pl'
    ],
    'static_languages'
);
