<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8727c450a40043fa359d2992208979b1
{
    public static $prefixLengthsPsr4 = array (
        'L' => 
        array (
            'Lukasgrofcik\\Package\\' => 21,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Lukasgrofcik\\Package\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit8727c450a40043fa359d2992208979b1::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8727c450a40043fa359d2992208979b1::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit8727c450a40043fa359d2992208979b1::$classMap;

        }, null, ClassLoader::class);
    }
}
