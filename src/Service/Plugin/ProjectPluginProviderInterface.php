<?php
/**
 * Project Plugin Provider Interface
 *
 * @category Popov
 * @package Popov_Project
 * @author Serhii Popov <popow.sergiy@gmail.com>
 */

namespace Popov\Project\Service\Plugin;

interface ProjectPluginProviderInterface
{
    /**
     * Expected to return \Zend\ServiceManager\Config object or array to
     * seed such an object.
     *
     * @return array|\Zend\ServiceManager\Config
     */
    public function getProjectPluginConfig();
}