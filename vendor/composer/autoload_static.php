<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8167c6e5d1ccdcaa6e62f9bbd72fab40
{
    public static $prefixLengthsPsr4 = array (
        'G' => 
        array (
            'Grav\\Plugin\\Matomo\\' => 19,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Grav\\Plugin\\Matomo\\' => 
        array (
            0 => __DIR__ . '/../..' . '/classes',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Grav\\Plugin\\MatomoPlugin' => __DIR__ . '/../..' . '/matomo.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8167c6e5d1ccdcaa6e62f9bbd72fab40::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8167c6e5d1ccdcaa6e62f9bbd72fab40::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit8167c6e5d1ccdcaa6e62f9bbd72fab40::$classMap;

        }, null, ClassLoader::class);
    }
}
