<?php

use Xanweb\ExtAsset\Asset\VendorAssetManager;

VendorAssetManager::register(
    'vendor-javascript',
    'js-cookie',
    'js.cookie.js',
    'xanweb/c5-js-cookie',
    [
        'minify' => false,
        'version' => '3.0.0',
    ]
);
