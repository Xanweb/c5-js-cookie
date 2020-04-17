<?php defined('C5_EXECUTE') or die('Access Denied.');

use Concrete\Core\Asset\Asset;
use Xanweb\ExtAsset\Asset\VendorAssetManager;

VendorAssetManager::registerMultiple([
    'js-cookie' => [
        [
            'vendor-javascript', 'js/js.cookie.min.js', 'xanweb/c5-js-cookie', [
                'minify' => false,
                'version' => '3.0.0-rc.0',
                'position' => Asset::ASSET_POSITION_HEADER,
            ],
        ],
    ],
]);
