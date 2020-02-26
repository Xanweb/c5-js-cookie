<?php defined('C5_EXECUTE') or die('Access Denied.');

use Xanweb\ExtAsset\Asset\VendorAssetManager;

VendorAssetManager::registerMultiple([
    'js-cookie' => [
        ['vendor-javascript', 'js/js.cookie.min.js', 'xanweb/c5-js-cookie', ['minify' => false, 'version' => '3.0.0-beta.3']],
    ],
]);
