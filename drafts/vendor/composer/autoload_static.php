<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9ce6505a8e1dac21aa83689729496932
{
    public static $files = array (
        'a9ed0d27b5a698798a89181429f162c5' => __DIR__ . '/..' . '/khanamiryan/qrcode-detector-decoder/lib/Common/customFunctions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'Z' => 
        array (
            'Zxing\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Zxing\\' => 
        array (
            0 => __DIR__ . '/..' . '/khanamiryan/qrcode-detector-decoder/lib',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit9ce6505a8e1dac21aa83689729496932::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9ce6505a8e1dac21aa83689729496932::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit9ce6505a8e1dac21aa83689729496932::$classMap;

        }, null, ClassLoader::class);
    }
}
