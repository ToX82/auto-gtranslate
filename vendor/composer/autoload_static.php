<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit69350b30b0f1a9f856ec839f28c1fc00
{
    public static $prefixLengthsPsr4 = array (
        'N' => 
        array (
            'Nggit\\PHPSimpleClient\\' => 22,
            'Nggit\\Google\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Nggit\\PHPSimpleClient\\' => 
        array (
            0 => __DIR__ . '/..' . '/nggit/php-simple-client/src',
        ),
        'Nggit\\Google\\' => 
        array (
            0 => __DIR__ . '/..' . '/nggit/php-gtranslate-free/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit69350b30b0f1a9f856ec839f28c1fc00::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit69350b30b0f1a9f856ec839f28c1fc00::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit69350b30b0f1a9f856ec839f28c1fc00::$classMap;

        }, null, ClassLoader::class);
    }
}
