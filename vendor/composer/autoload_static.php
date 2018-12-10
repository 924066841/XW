<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf7388388e50ce98b1728d3dd1e7ea81d
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Swoole\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Swoole\\' => 
        array (
            0 => __DIR__ . '/..' . '/easyswoole/swoole-ide-helper/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf7388388e50ce98b1728d3dd1e7ea81d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf7388388e50ce98b1728d3dd1e7ea81d::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}