<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfe6d033cc33eb8c20045422d97f36a1a
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitfe6d033cc33eb8c20045422d97f36a1a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitfe6d033cc33eb8c20045422d97f36a1a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitfe6d033cc33eb8c20045422d97f36a1a::$classMap;

        }, null, ClassLoader::class);
    }
}
