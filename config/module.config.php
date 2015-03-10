<?php
namespace Ageme\Project;

return [

	'service_manager' => [
		'factories' => [
			'ProjectPluginManager' => 'Ageme\Project\Service\Plugin\ProjectPluginFactory',
		],
	],

	'project_plugins' => [
		'invokables' => [
			'web-app' => 'Ageme\Project\Service\Plugin\WebApp',
		],
	],

];