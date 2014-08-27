WdgCafepress
============
##Install

Add WdgCafepress to your project's composer.json

```php
"require": {
    "php": ">=5.3.3",
    "webdevgods/wdg-cafepress": "dev-master",
}
```

##Setup

1.Copy wdgcafepress.global.php.dist to your config/autoload folder and remove the .dist extension.

2.Add your apikey and store id to the wdgcafepress.global.php file.

```php
return array(
    "wdgcafepress" => array(
        "apikey" => "qrgq7mkc7jug4fcjyh6j5tdxahlhh0dczl38",
        "storeid" => "diamonds2destiny",
        "baseurl" => "http://open-api.cafepress.com/" //Cafepress api base url
    )
);
```

3.Add WdgCafepress to your application.config.php "modules" array.

##Usage

```php
$cafepress_service = $service_locator->get("wdgcafepress_service_cafepress");

$sections = $cafepress_service->getStoreSections();

foreach($sections as $section)
{
  echo $section->getCaption()."<br />";
}
```
