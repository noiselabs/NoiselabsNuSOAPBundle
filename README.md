NoiselabsNuSOAP
===============

[@php]:     http://php.net/                 "PHP: Hypertext Preprocessor"
[@nusoap]:  http://nusoap.sourceforge.net/  "NuSOAP - SOAP Toolkit for PHP"
[@symfony]: http://www.symfony.com/         "High Performance PHP Framework for Web Development"

[Symfony2][@symfony] bundle for [NuSOAP - SOAP Toolkit for PHP][@nusoap].

[![Latest Stable Version](https://poser.pugx.org/noiselabs/nusoap-bundle/v/stable)](https://packagist.org/packages/noiselabs/nusoap-bundle)
[![Total Downloads](https://poser.pugx.org/noiselabs/nusoap-bundle/downloads)](https://packagist.org/packages/noiselabs/nusoap-bundle)
[![Latest Unstable Version](https://poser.pugx.org/noiselabs/nusoap-bundle/v/unstable)](https://packagist.org/packages/noiselabs/nusoap-bundle)
[![Build Status](https://travis-ci.org/noiselabs/NoiselabsNuSOAPBundle.svg?branch=master)](https://travis-ci.org/noiselabs/NoiselabsNuSOAPBundle)
[![License](https://poser.pugx.org/noiselabs/nusoap-bundle/license)](https://packagist.org/packages/noiselabs/nusoap-bundle)

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

### 1. Download the Bundle

Open a command console, enter your project directory and execute the following command to download the latest stable
version of this bundle:

    $ composer require noiselabs/nusoap-bundle


### 2. Enable the Bundle

Then, enable the bundle by adding the following line in the app/AppKernel.php file of your project:

```php
// app/AppKernel.php
class AppKernel extends Kernel
{
    public function registerBundles()
    {
        $bundles = array(
            // ...
            new NoiseLabs\Bundle\NuSOAPBundle\NoiseLabsNuSOAPBundle(),
        );
        
        // ...
    }
}
```

Usage
-----

```php
$client = new \nusoap_client('http://example.com/url/to/some/valid.wsdl', true);

$response = $client->call('someSOAPMethod', array('param1'=>'foo', 'param2'=>'bar'));
```
