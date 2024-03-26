<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd1c006ceffc32a7a0985fca1339ab8ec
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Test\\Library\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Test\\Library\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitd1c006ceffc32a7a0985fca1339ab8ec::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd1c006ceffc32a7a0985fca1339ab8ec::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd1c006ceffc32a7a0985fca1339ab8ec::$classMap;

        }, null, ClassLoader::class);
    }
}