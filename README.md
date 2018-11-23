Custom ZF ServiceManager Plugin
------------

Example creation new ServiceManager Plugin

## Register

### Config 
If you want to use powerful functionality of ServiceManager Plugin 
then you need to copy content of `config/application.config.php.sample`
with composer installation and add config to `root-of-project/config/application.config.php`
```php
'service_listener_options' => [
    [
        'service_manager' => 'ProjectPluginManager',
        'config_key'      => 'project_plugins',
        'interface'       => 'Popov\Project\Service\Plugin\ProjectPluginProviderInterface',
        'method'          => 'getProjectPluginConfig',
    ],
],

'service_manager' => [
    'invokables' => [
        'ProjectPluginManager' => \Popov\Project\Service\Plugin\ProjectPluginFactory::class,
    ],
],
```

### Standalone
You should uncomment `Popov\Project\Module::init()` method and correct names to your requirements.
After this your Custom ServiceManager will be accessible in application. 

## Usage

```php
public function __invoke($container) 
{
    $ppm = $container->get('ProjectPluginManager');
    $webApp = $ppm->get('web-app');
    echo $webApp->getName();
}
```
