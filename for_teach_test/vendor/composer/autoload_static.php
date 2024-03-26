<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite1f1fc1251fd13ec880430d3d50c6e18
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInite1f1fc1251fd13ec880430d3d50c6e18::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite1f1fc1251fd13ec880430d3d50c6e18::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite1f1fc1251fd13ec880430d3d50c6e18::$classMap;

        }, null, ClassLoader::class);
    }
}
