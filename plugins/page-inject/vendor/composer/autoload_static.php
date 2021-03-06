<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitcb6e7b445b2976f19ebea4affe71a8b0
{
    public static $prefixLengthsPsr4 = array (
        'G' => 
        array (
            'Grav\\Plugin\\PageInject\\' => 23,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Grav\\Plugin\\PageInject\\' => 
        array (
            0 => __DIR__ . '/../..' . '/classes',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Grav\\Plugin\\PageInjectPlugin' => __DIR__ . '/../..' . '/page-inject.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitcb6e7b445b2976f19ebea4affe71a8b0::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitcb6e7b445b2976f19ebea4affe71a8b0::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitcb6e7b445b2976f19ebea4affe71a8b0::$classMap;

        }, null, ClassLoader::class);
    }
}
