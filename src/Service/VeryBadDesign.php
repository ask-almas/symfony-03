<?php

namespace App\Service;

use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

class VeryBadDesign implements ContainerAwareInterface
{
    /**
     * @required
     * @param ContainerInterface|null $container
     */
    public function setContainer(ContainerInterface $container = null)
    {
//        $container->get('app.greeting');
    }
}