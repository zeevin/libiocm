<?php
/**
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2020/2/28
 * Time: 14:19
 * Source: autoload.php
 * Project: libiocm
 */

use Doctrine\Common\Annotations\AnnotationRegistry;

$loader = require_once '../vendor/autoload.php';
AnnotationRegistry::registerLoader([$loader, 'loadClass']);

return $loader;
