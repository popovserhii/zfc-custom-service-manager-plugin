Custom ZF2 ServiceManager Plugin
------------

Example creation new ServiceManager Plugin

## Usage

#### This example is correct only for array config notation

	public function indexAction() {
		$locator = $this->getServiceLocator();
		$ppm = $locator->get('ProjectPluginManager');
		$webApp = $ppm->get('web-app');
		echo $webApp->getName();
	}
	
If you want use powerful functionality of ServiceManager Plugin 
then you need create custom module in `./vendor` 
with composer installation and add config to `./config/application.config.php`


	'service_listener_options' => [
		[
			'service_manager' => 'YourLib\Project\PluginManager',
			'config_key'      => 'project_plugins',
			'interface'       => 'YourLib\Project\Service\Plugin\ProjectPluginProviderInterface',
			'method'          => 'getProjectPluginConfig',
		],
	],

