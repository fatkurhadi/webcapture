<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitaf20c56c61c212309c3b601e2030facc
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Screen\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Screen\\' => 
        array (
            0 => __DIR__ . '/..' . '/microweber/screen/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitaf20c56c61c212309c3b601e2030facc::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitaf20c56c61c212309c3b601e2030facc::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitaf20c56c61c212309c3b601e2030facc::$classMap;

        }, null, ClassLoader::class);
    }
}
