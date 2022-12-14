<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0636fcfadaa24dad1eb39429f65ec50b
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Sis\\TrackHistory\\' => 17,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Sis\\TrackHistory\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit0636fcfadaa24dad1eb39429f65ec50b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0636fcfadaa24dad1eb39429f65ec50b::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit0636fcfadaa24dad1eb39429f65ec50b::$classMap;

        }, null, ClassLoader::class);
    }
}
