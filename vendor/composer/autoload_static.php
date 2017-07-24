<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2ebde777c31b0982fee9712738522f5b
{
    public static $files = array (
        '2cffec82183ee1cea088009cef9a6fc3' => __DIR__ . '/..' . '/ezyang/htmlpurifier/library/HTMLPurifier.composer.php',
        'dfc9e5dd545737efbb98020db79bfa08' => __DIR__ . '/..' . '/mos/cimage/defines.php',
        '507fe79d3e285fab95fad400b8d42245' => __DIR__ . '/..' . '/mos/cimage/functions.php',
        '80664c7f22a8ea27bde46f1ed932afe6' => __DIR__ . '/..' . '/mos/anax/src/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Component\\Yaml\\' => 23,
        ),
        'M' => 
        array (
            'Mos\\TextFilter\\' => 15,
        ),
        'A' => 
        array (
            'Anax\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Component\\Yaml\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/yaml',
        ),
        'Mos\\TextFilter\\' => 
        array (
            0 => __DIR__ . '/..' . '/mos/ctextfilter/src/TextFilter',
        ),
        'Anax\\' => 
        array (
            0 => __DIR__ . '/..' . '/mos/anax/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'M' => 
        array (
            'Michelf' => 
            array (
                0 => __DIR__ . '/..' . '/michelf/php-markdown',
                1 => __DIR__ . '/..' . '/michelf/php-smartypants',
            ),
        ),
        'H' => 
        array (
            'Highlight\\' => 
            array (
                0 => __DIR__ . '/..' . '/scrivo/highlight.php',
            ),
            'HTMLPurifier' => 
            array (
                0 => __DIR__ . '/..' . '/ezyang/htmlpurifier/library',
            ),
        ),
    );

    public static $classMap = array (
        'CAsciiArt' => __DIR__ . '/..' . '/mos/cimage/CAsciiArt.php',
        'CCache' => __DIR__ . '/..' . '/mos/cimage/CCache.php',
        'CFastTrackCache' => __DIR__ . '/..' . '/mos/cimage/CFastTrackCache.php',
        'CHttpGet' => __DIR__ . '/..' . '/mos/cimage/CHttpGet.php',
        'CImage' => __DIR__ . '/..' . '/mos/cimage/CImage.php',
        'CRemoteImage' => __DIR__ . '/..' . '/mos/cimage/CRemoteImage.php',
        'CWhitelist' => __DIR__ . '/..' . '/mos/cimage/CWhitelist.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit2ebde777c31b0982fee9712738522f5b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2ebde777c31b0982fee9712738522f5b::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit2ebde777c31b0982fee9712738522f5b::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit2ebde777c31b0982fee9712738522f5b::$classMap;

        }, null, ClassLoader::class);
    }
}
