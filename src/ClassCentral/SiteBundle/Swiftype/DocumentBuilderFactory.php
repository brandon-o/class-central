<?php
/**
 * Created by PhpStorm.
 * User: dhawal
 * Date: 12/15/13
 * Time: 12:06 PM
 */

namespace ClassCentral\SiteBundle\Swiftype;

use ClassCentral\SiteBundle\Swiftype\DocumentBuilders\CourseDocumentBuilder;
use ClassCentral\SiteBundle\Swiftype\DocumentBuilders\InstitutionDocumentBuilder;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Factory for getting different document builder factory
 * Class DocumentBuilderFactory
 * @package ClassCentral\SiteBundle\Swiftype
 */
class DocumentBuilderFactory {

    private function __construct() {}

    public static function getDocumentBuilder(ContainerInterface $container, $type)
    {
        if($type == 'Course')
        {
            return new CourseDocumentBuilder($container);
        }
        else if ($type == 'University')
        {
            return new InstitutionDocumentBuilder($container);
        }

        throw new \Exception("Document type {$type} not found in DocumentBuilderFactory");
    }
} 