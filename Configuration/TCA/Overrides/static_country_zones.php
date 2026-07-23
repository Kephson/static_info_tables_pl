<?php
declare(strict_types=1);

defined('TYPO3') || die;

use RENOLIT\StaticInfoTablesPl\Provider\TcaProvider;

call_user_func(
    function ($additionalFields, $dataSetName) {
        TcaProvider::generateAndRegisterTca($additionalFields, $dataSetName);
    },
    [
        'zn_name_en' => 'zn_name_pl'
    ],
    'static_country_zones'
);
