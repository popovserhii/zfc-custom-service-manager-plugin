<?php
/**
 * Project Plugin Manager
 *
 * @category Ageme
 * @package Ageme_Project
 * @author Popov Sergiy <popov@agere.com.ua>
 * @datetime: 09.03.15 21:29
 */

namespace Ageme\Project\Service\Plugin;

use Zend\Stdlib\Exception;
use Zend\ServiceManager\AbstractPluginManager;

class ProjectPluginManager extends AbstractPluginManager {

	/**
	 * Default set of extension classes
	 * Note: Use config notation for more flexibility
	 *
	 * @var array
	 */
	protected $invokableClasses = [
		//'web-app' => 'Ageme\Project\Service\Plugin\WebApp',
	];

	public function validatePlugin($plugin) {
		if ($plugin instanceof ProjectPluginInterface) {
			throw new Exception\RuntimeException(sprintf(
				'Plugin of type %s is invalid; must implement %s\ProjectPluginInterface',
				(is_object($plugin) ? get_class($plugin) : gettype($plugin)),
				__NAMESPACE__
			));
		}
	}
}