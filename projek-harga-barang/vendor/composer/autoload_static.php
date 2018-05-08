<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0929909e8c8b6727f901d1a24f796eba
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'MatthiasMullie\\PathConverter\\' => 29,
            'MatthiasMullie\\Minify\\' => 22,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'MatthiasMullie\\PathConverter\\' => 
        array (
            0 => __DIR__ . '/..' . '/matthiasmullie/path-converter/src',
        ),
        'MatthiasMullie\\Minify\\' => 
        array (
            0 => __DIR__ . '/..' . '/matthiasmullie/minify/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0929909e8c8b6727f901d1a24f796eba::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0929909e8c8b6727f901d1a24f796eba::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
