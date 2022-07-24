<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit77e9a9764bcffbbdeef68480fa32e30a
{
    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'Faker\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Faker\\' => 
        array (
            0 => __DIR__ . '/..' . '/fzaninotto/faker/src/Faker',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit77e9a9764bcffbbdeef68480fa32e30a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit77e9a9764bcffbbdeef68480fa32e30a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit77e9a9764bcffbbdeef68480fa32e30a::$classMap;

        }, null, ClassLoader::class);
    }
}
