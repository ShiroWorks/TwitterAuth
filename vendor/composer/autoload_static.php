<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit330c5d82d34ac404b7b81166369310bb
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Composer\\Installers\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Composer\\Installers\\' => 
        array (
            0 => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers',
        ),
    );

    public static $classMap = array (
        'Codebird\\Codebird' => __DIR__ . '/..' . '/jublonet/codebird-php/src/codebird.php',
        'Codebird\\CodebirdAuthException' => __DIR__ . '/..' . '/jublonet/codebird-php/src/codebird.php',
        'Codebird\\CodebirdCredentialsException' => __DIR__ . '/..' . '/jublonet/codebird-php/src/codebird.php',
        'Codebird\\CodebirdEndpointException' => __DIR__ . '/..' . '/jublonet/codebird-php/src/codebird.php',
        'Codebird\\CodebirdMediaException' => __DIR__ . '/..' . '/jublonet/codebird-php/src/codebird.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit330c5d82d34ac404b7b81166369310bb::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit330c5d82d34ac404b7b81166369310bb::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit330c5d82d34ac404b7b81166369310bb::$classMap;

        }, null, ClassLoader::class);
    }
}
