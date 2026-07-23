<?php
declare(strict_types=1);

defined('TYPO3') || die;

use RENOLIT\StaticInfoTablesPl\Provider\TcaProvider;

call_user_func(
    function ($additionalFields, $dataSetName) {
        TcaProvider::generateAndRegisterTca($additionalFields, $dataSetName);
    },
    [
        'cn_short_en' => 'cn_short_pl',
        'cn_official_name_en' => 'cn_official_name_pl',
        'cn_capital' => 'cn_capital_pl',
    ],
    'static_countries'
);
