NoiselabsNuSOAP
===============

[@php]:     http://php.net/                 "PHP: Hypertext Preprocessor"
[@nusoap]:  http://nusoap.sourceforge.net/  "NuSOAP - SOAP Toolkit for PHP"
[@symfony]: http://www.symfony.com/         "High Performance PHP Framework for Web Development"

[Symfony2][@symfony] bundle for [NuSOAP - SOAP Toolkit for PHP][@nusoap].

Requirements
------------

* [PHP][@php] 5.3.3 and up.
* [Symfony 2][@symfony]

Installation (Composer)
-----------------------

### 0. Install Composer

If you don't have Composer yet, download it following the instructions on
http://getcomposer.org/ or just run the following command:

``` bash
curl -s http://getcomposer.org/installer | php
```

### 1. Add the noiselabs/nusoap-bundle package and the nusoap repository in your composer.json

#### 1.1 Require section

Add the line to the require section of your json file, by adding a comma ( , ) at the end of the last line and paste "noiselabs/nusoap-bundle": "dev-master" before the finish bracket ( } )
```js

    "require": {
            "php": ">=5.3.3",
            "symfony/symfony": "~2.4",
            //...
            "doctrine/doctrine-fixtures-bundle": "2.2.*",
            "noiselabs/nusoap-bundle": "dev-master"

```
#### 1.1 Repository section

Add a new repository to tell composer where to find the bundle ( check if you have "," after "}" from extra section, if not add it )

```js

    "extra": {
        "symfony-app-dir": "app",
        "symfony-web-dir": "web",
        "incenteev-parameters": {
            "file": "app/config/parameters.yml"
        },
        "branch-alias": {
            "dev-master": "2.4-dev"
        }
        
    }, 
    
    "repositories": [
        {
            "type": "package",
            "package": {
                "name": "nusphere/nusoap",
                "version": "0.9.5",
                "dist": {
                    "url": "http://downloads.sourceforge.net/project/nusoap/nusoap/0.9.5/nusoap-0.9.5.zip",
                    "type": "zip"
                },
                "autoload": {
                    "classmap": ["lib/"]
                }
            }
        }
    ]

} //end bracket of json file

```
Now tell composer to download the bundle by running the command:

```bash
$ php composer.phar update noiselabs/nusoap-bundle
```

Composer will install the bundle to your project's `vendor/noiselabs` directory.

### 2. Enable the bundle

Enable the bundle in the kernel:

```php
<?php
// app/AppKernel.php

public function registerBundles()
{
    $bundles = array(
        // ...
        new NoiseLabs\Bundle\NuSOAPBundle\NoiseLabsNuSOAPBundle(),
    );
}
```

Usage
-----

```php

$client = new \nusoap_client('http://example.com/url/to/some/valid.wsdl', true);

$response = $client->call('someSOAPMethod', array('param1'=>'foo', 'param2'=>'bar'));
```


[![Bitdeli Badge](https://d2weczhvl823v0.cloudfront.net/noiselabs/noiselabsnusoapbundle/trend.png)](https://bitdeli.com/free "Bitdeli Badge")

