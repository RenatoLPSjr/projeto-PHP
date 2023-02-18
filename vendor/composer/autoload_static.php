<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita405ea14852e51c5716f796c31b993ea
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Sts\\' => 4,
        ),
        'C' => 
        array (
            'Core\\' => 5,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Sts\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app/sts',
        ),
        'Core\\' => 
        array (
            0 => __DIR__ . '/../..' . '/core',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita405ea14852e51c5716f796c31b993ea::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita405ea14852e51c5716f796c31b993ea::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita405ea14852e51c5716f796c31b993ea::$classMap;

        }, null, ClassLoader::class);
    }
}
