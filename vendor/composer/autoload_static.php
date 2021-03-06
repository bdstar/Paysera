<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita34487f65c2e3b82cefcb04477323ae3
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'MyApp\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'MyApp\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'MyApp\\Data\\Database' => __DIR__ . '/../..' . '/src/Data/Database.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita34487f65c2e3b82cefcb04477323ae3::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita34487f65c2e3b82cefcb04477323ae3::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita34487f65c2e3b82cefcb04477323ae3::$classMap;

        }, null, ClassLoader::class);
    }
}
