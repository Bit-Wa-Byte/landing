<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit60fcff2e7f8dccdb4bf4bb339a4b87e7
{
    public static $prefixLengthsPsr4 = array (
        'J' => 
        array (
            'Jaybizzle\\CrawlerDetect\\' => 24,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Jaybizzle\\CrawlerDetect\\' => 
        array (
            0 => __DIR__ . '/..' . '/jaybizzle/crawler-detect/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'SeriouslySimpleStats\\Classes\\All_Episode_Stats' => __DIR__ . '/../..' . '/php/classes/class-all-episode-stats.php',
        'SeriouslySimpleStats\\Classes\\Stats' => __DIR__ . '/../..' . '/php/classes/class-ssp-stats.php',
        'SeriouslySimpleStats\\Classes\\Stats_Hit' => __DIR__ . '/../..' . '/php/classes/class-ssp-stats-hit.php',
        'SeriouslySimpleStats\\Classes\\Stats_Upgrade' => __DIR__ . '/../..' . '/php/classes/class-ssp-stats-upgrade.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit60fcff2e7f8dccdb4bf4bb339a4b87e7::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit60fcff2e7f8dccdb4bf4bb339a4b87e7::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit60fcff2e7f8dccdb4bf4bb339a4b87e7::$classMap;

        }, null, ClassLoader::class);
    }
}
