<?php

use Concrete\Core\Asset\Asset;
use Xanweb\ExtAsset\Asset\VendorAssetManager;

VendorAssetManager::registerMultiple([
    'js-cookie' => [
        [
            'vendor-javascript', 'js.cookie.js', 'xanweb/c5-js-cookie', [
                'minify' => false,
                'version' => '3.0.0-rc.1',
                'position' => Asset::ASSET_POSITION_HEADER,
            ],
        ],
    ],
]);
