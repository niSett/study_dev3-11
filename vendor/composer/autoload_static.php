<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit13eedf479da550272780d577f4fa0d14
{
    public static $prefixLengthsPsr4 = array (
        'a' => 
        array (
            'app\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit13eedf479da550272780d577f4fa0d14::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit13eedf479da550272780d577f4fa0d14::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit13eedf479da550272780d577f4fa0d14::$classMap;

        }, null, ClassLoader::class);
    }
}
