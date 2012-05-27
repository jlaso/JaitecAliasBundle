JaitecAliasBundle
=================

This bundle provides helpers to generate pseudo-random alias.


Installation
============

Add AliasBundle to your vendor/bundles/ dir
------------------------------------------

::

    $ git submodule add git://github.com/jlaso/JaitecAliasBundle.git vendor/bundles/Jaitec/AliasBundle

Add the Jaitec namespace to your autoloader
-------------------------------------------

::

    // app/autoload.php
    $loader->registerNamespaces(array(
        'Jaitec' => __DIR__.'/../vendor/bundles',
        // your other namespaces
    );

Add AliasBundle to your application kernel
------------------------------------------

::

    // app/AppKernel.php

    public function registerBundles()
    {
        return array(
            // ...
            new Jaitec\AliasBundle\JaitecAliasBundle(),
            // ...
        );
    }



Usage
=====

AlilasBundle provides this service to generate pseudo-random alias :

- ``jaitec_alias.main`` implements ``AliasGeneratorInterface``


Instead of those specialized services, you can also inject ``jaitec_alias.main``,
which provides shortcuts to all of the other services and allow you to only
inject a single dependancy.
