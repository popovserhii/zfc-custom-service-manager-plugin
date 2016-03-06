<?php
/**
 * Project configuration module
 *
 * @category Ageme
 * @package Ageme_Project
 * @author Popov Sergiy <popov@agere.com.ua>
 * @datetime: 28.07.14 15:20
 */
namespace Ageme\Project;

use Zend\Mvc\ModuleRouteListener;
use Zend\ModuleManager\ModuleManager;
use Zend\ModuleManager\Feature\AutoloaderProviderInterface;
use Zend\ModuleManager\Feature\ConfigProviderInterface;

class Module implements AutoloaderProviderInterface, ConfigProviderInterface {

	/*public function init(ModuleManager $moduleManager) {
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
			'Ageme\Project\Service\Plugin\ProjectPluginProviderInterface',

			// The function specified by the above interface, the return value of this
			// function is merged with the config from 'sample_plugins_config_key'.
			'getProjectPluginConfig'
		);
	}*/

	public function getConfig() {
		return include __DIR__ . '/config/module.config.php';
	}

	public function getAutoloaderConfig() {
		return [
			'Zend\Loader\StandardAutoloader' => [
				'namespaces' => [
					__NAMESPACE__ => str_replace('\\', '/', __DIR__ . '/src/' . __NAMESPACE__),
				],
			],
		];
	}

}
