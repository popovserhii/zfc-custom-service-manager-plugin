<?php
/**
 * Project configuration module
 *
 * @category Popov
 * @package Popov_Project
 * @author Serhii Popov <popow.sergiy@gmail.com>
 */

namespace Popov\Project;

use Zend\ModuleManager\ModuleManager;
use Zend\ModuleManager\Feature\ConfigProviderInterface;
use Popov\Project\Service\Plugin\ProjectPluginProviderInterface;

class Module implements ConfigProviderInterface
{
    public function init(ModuleManager $moduleManager)
    {
        $sm = $moduleManager->getEvent()->getParam('ServiceManager');
        $serviceListener = $sm->get('ServiceListener');
        $serviceListener->addServiceManager(
            // The name of the plugin manager as it is configured in the service manager,
            // all config is injected into this instance of the plugin manager.
            'ProjectPluginManager',
            // The key which is read from the merged module.config.php files, the
            // contents of this key are used as services for the plugin manager.
            'project_plugins',
            // The interface which can be specified on a Module class for injecting
            // services into the plugin manager, using this interface in a Module
            // class is optional and depending on how your autoloader is configured
            // it may not work correctly.
            ProjectPluginProviderInterface::class,
            // The function specified by the above interface, the return value of this
            // function is merged with the config from 'sample_plugins_config_key'.
            'getProjectPluginConfig'
        );
    }

    public function getConfig()
    {
        return include __DIR__ . '/config/module.config.php';
    }
}
