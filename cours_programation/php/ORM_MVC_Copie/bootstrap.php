<?php
// bootstrap.php
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;
use Doctrine\DBAL\DriverManager;

require_once "vendor/autoload.php";

// Create a simple "default" Doctrine ORM configuration for Annotations
$isDevMode = true;
$proxyDir = null;
$cache = null;
$useSimpleAnnotationReader = false;
$config = Setup::createAnnotationMetadataConfiguration(array(__DIR__ . "/src/entities/"), $isDevMode, $proxyDir, $cache, $useSimpleAnnotationReader);
// or if you prefer yaml or XML
//$config = Setup::createXMLMetadataConfiguration(array(__DIR__."/config/xml"), $isDevMode);
//$config = Setup::createYAMLMetadataConfiguration(array(__DIR__."/config/yaml"), $isDevMode);

// database configuration parameters 
$conndata = array(
    'dbname' => 'samanemvcorm',
    'user' => 'root',
    'password' => '',
    'host' => '127.0.0.1',
    'driver' => 'pdo_mysql',
);

// obtaining the entity manager
$conne =  DriverManager::getConnection($conndata);
$queryBuilder =  $conne->createQueryBuilder();
$entityManager = EntityManager::create($conndata, $config);
