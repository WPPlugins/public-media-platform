<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitcd9fac446cc61a6a11a6a282dea3e060
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Component\\EventDispatcher\\' => 34,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Component\\EventDispatcher\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/event-dispatcher',
        ),
    );

    public static $prefixesPsr0 = array (
        'P' => 
        array (
            'Pmp\\' => 
            array (
                0 => __DIR__ . '/..' . '/publicmediaplatform/pmpsdk/src',
            ),
        ),
        'G' => 
        array (
            'Guzzle\\Tests' => 
            array (
                0 => __DIR__ . '/..' . '/guzzle/guzzle/tests',
            ),
            'Guzzle' => 
            array (
                0 => __DIR__ . '/..' . '/guzzle/guzzle/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitcd9fac446cc61a6a11a6a282dea3e060::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitcd9fac446cc61a6a11a6a282dea3e060::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitcd9fac446cc61a6a11a6a282dea3e060::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
