<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite553f217c7e8beb086630827c6355736
{
    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInite553f217c7e8beb086630827c6355736::$classMap;

        }, null, ClassLoader::class);
    }
}
