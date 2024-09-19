<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitac2332f60a4deb825a6d05f86ad463b1
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Mewasim\\Tracker\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Mewasim\\Tracker\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitac2332f60a4deb825a6d05f86ad463b1::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitac2332f60a4deb825a6d05f86ad463b1::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitac2332f60a4deb825a6d05f86ad463b1::$classMap;

        }, null, ClassLoader::class);
    }
}