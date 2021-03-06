<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit549ca4d4bb7b6c464873e8646910e1d8
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Musnow\\AlipayF2F\\' => 17,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Musnow\\AlipayF2F\\' => 
        array (
            0 => __DIR__ . '/..' . '/musnow/alipayf2f/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit549ca4d4bb7b6c464873e8646910e1d8::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit549ca4d4bb7b6c464873e8646910e1d8::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
