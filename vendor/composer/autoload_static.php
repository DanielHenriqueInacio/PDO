<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3380d0448f071f3f225bfb79c5d37db4
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Plasticbrain\\FlashMessages\\' => 27,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Plasticbrain\\FlashMessages\\' => 
        array (
            0 => __DIR__ . '/..' . '/plasticbrain/php-flash-messages/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit3380d0448f071f3f225bfb79c5d37db4::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3380d0448f071f3f225bfb79c5d37db4::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
