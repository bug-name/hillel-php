<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb34662914de26731a593832fdb3c014b
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Core\\' => 5,
            'Controllers\\' => 12,
            'Common\\' => 7,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Core\\' => 
        array (
            0 => __DIR__ . '/../..' . '/core',
        ),
        'Controllers\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App/Controllers',
        ),
        'Common\\' => 
        array (
            0 => __DIR__ . '/../..' . '/common',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static $classMap = array (
        'App\\Model\\About' => __DIR__ . '/../..' . '/App/Model/About.php',
        'App\\Model\\AbstractModel' => __DIR__ . '/../..' . '/App/Model/AbstractModel.php',
        'App\\Model\\Admin' => __DIR__ . '/../..' . '/App/Model/Admin.php',
        'App\\Model\\Gallery' => __DIR__ . '/../..' . '/App/Model/Gallery.php',
        'App\\Model\\Index' => __DIR__ . '/../..' . '/App/Model/Index.php',
        'Common\\Database\\DbConnector' => __DIR__ . '/../..' . '/common/Database/DbConnector.php',
        'Controllers\\AbstractController' => __DIR__ . '/../..' . '/App/Controllers/AbstractController.php',
        'Controllers\\Admin\\Admin' => __DIR__ . '/../..' . '/App/Controllers/Admin/Admin.php',
        'Controllers\\Home\\About' => __DIR__ . '/../..' . '/App/Controllers/Home/About.php',
        'Controllers\\Home\\Gallery' => __DIR__ . '/../..' . '/App/Controllers/Home/Gallery.php',
        'Controllers\\Home\\Index' => __DIR__ . '/../..' . '/App/Controllers/Home/Index.php',
        'Controllers\\Home\\Page404' => __DIR__ . '/../..' . '/App/Controllers/Home/Page404.php',
        'Core\\Router' => __DIR__ . '/../..' . '/core/Router.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb34662914de26731a593832fdb3c014b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb34662914de26731a593832fdb3c014b::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitb34662914de26731a593832fdb3c014b::$classMap;

        }, null, ClassLoader::class);
    }
}
