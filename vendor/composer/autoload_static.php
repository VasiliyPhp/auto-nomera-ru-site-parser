<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2295f4e567db3730a262a3299971d418
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Curl\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Curl\\' => 
        array (
            0 => __DIR__ . '/..' . '/php-curl-class/php-curl-class/src/Curl',
        ),
    );

    public static $prefixesPsr0 = array (
        'p' => 
        array (
            'phpQuery' => 
            array (
                0 => __DIR__ . '/..' . '/coderockr/php-query/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit2295f4e567db3730a262a3299971d418::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2295f4e567db3730a262a3299971d418::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit2295f4e567db3730a262a3299971d418::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
