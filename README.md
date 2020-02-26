# C5 JavaScript Cookie

Integrate JavaScript Cookie API in [Concrete5](https://github.com/concrete5/concrete5) Assets System.

## Official Source
#### [https://github.com/js-cookie/js-cookie](https://github.com/js-cookie/js-cookie)

## Installation

Include library to your composer.json
```bash
composer require xanweb/c5-js-cookie
```

## Usage
```php
    $g = \Concrete\Core\Http\ResponseAssetGroup::get();
    $g->requireAsset('vendor-javascript', 'js-cookie');
```

Or like in Block Controller
```php
    public function registerViewAssets($outputContent = '')
    {
        $this->requireAsset('vendor-javascript', 'js-cookie');
    }
```

## Issues
If you have any issue regarding the JavaScript Cookie API please use [JavaScript Cookie Issues Tracker](https://github.com/js-cookie/js-cookie/issues).

## License
The C5 JavaScript Cookie is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
