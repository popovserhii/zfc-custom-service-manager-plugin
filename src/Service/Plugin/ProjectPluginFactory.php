<?php
/**
 * Plugin Factory
 *
 * @category Popov
 * @package Popov_Project
 * @author Serhii Popov <popow.sergiy@gmail.com>
 */

namespace Popov\Project\Service\Plugin;

use Zend\Mvc\Service\AbstractPluginManagerFactory;

class ProjectPluginFactory extends AbstractPluginManagerFactory
{
    const PLUGIN_MANAGER_CLASS = ProjectPluginManager::class;
}