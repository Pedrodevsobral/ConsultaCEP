<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit90409ba79731daf90fc09d2eb3cd1d63
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Pdev\\Consultacep\\' => 17,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Pdev\\Consultacep\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit90409ba79731daf90fc09d2eb3cd1d63::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit90409ba79731daf90fc09d2eb3cd1d63::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit90409ba79731daf90fc09d2eb3cd1d63::$classMap;

        }, null, ClassLoader::class);
    }
}
