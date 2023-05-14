<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit86e45622ffd99cca5f0bb0d112b42841
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Cellule\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Cellule\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit86e45622ffd99cca5f0bb0d112b42841::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit86e45622ffd99cca5f0bb0d112b42841::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit86e45622ffd99cca5f0bb0d112b42841::$classMap;

        }, null, ClassLoader::class);
    }
}
