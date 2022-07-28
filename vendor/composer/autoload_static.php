<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4508479fb40a89252524f3b4bd070dec
{
    public static $prefixLengthsPsr4 = array (
        'L' => 
        array (
            'LkInteractive\\Back\\Doctrine\\' => 28,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'LkInteractive\\Back\\Doctrine\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'LkInteractive\\Back\\Doctrine\\Controller\\AdminCarrouselController' => __DIR__ . '/../..' . '/src/Controller/AdminCarrouselController.php',
        'LkInteractive\\Back\\Doctrine\\Entity\\Carrousel' => __DIR__ . '/../..' . '/src/Entity/Carrousel.php',
        'LkInteractive\\Back\\Doctrine\\Entity\\CarrouselLang' => __DIR__ . '/../..' . '/src/Entity/CarrouselLang.php',
        'LkInteractive\\Back\\Doctrine\\Form\\CarrouselFormDataHandler' => __DIR__ . '/../..' . '/src/Form/CarrouselFormDataHandler.php',
        'LkInteractive\\Back\\Doctrine\\Form\\CarrouselFormDataProvider' => __DIR__ . '/../..' . '/src/Form/CarrouselFormDataProvider.php',
        'LkInteractive\\Back\\Doctrine\\Form\\CarrouselType' => __DIR__ . '/../..' . '/src/Form/CarrouselType.php',
        'LkInteractive\\Back\\Doctrine\\Grid\\CarrouselFilters' => __DIR__ . '/../..' . '/src/Grid/CarrouselFilters.php',
        'LkInteractive\\Back\\Doctrine\\Grid\\CarrouselGridDefinitionFactory' => __DIR__ . '/../..' . '/src/Grid/CarrouselGridDefinitionFactory.php',
        'LkInteractive\\Back\\Doctrine\\Grid\\CarrouselQueryBuilder' => __DIR__ . '/../..' . '/src/Grid/CarrouselQueryBuilder.php',
        'LkInteractive\\Back\\Doctrine\\Repository\\CarrouselRepository' => __DIR__ . '/../..' . '/src/Repository/CarrouselRepository.php',
        'LkPCarrousels' => __DIR__ . '/../..' . '/lkpcarrousels.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4508479fb40a89252524f3b4bd070dec::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4508479fb40a89252524f3b4bd070dec::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit4508479fb40a89252524f3b4bd070dec::$classMap;

        }, null, ClassLoader::class);
    }
}