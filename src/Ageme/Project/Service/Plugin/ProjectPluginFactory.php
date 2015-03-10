<?php
/**
 * Plugin Factory
 *
 * @category Ageme
 * @package Ageme_Project
 * @author Popov Sergiy <popov@agere.com.ua>
 * @datetime: 09.03.15 21:55
 */

namespace Ageme\Project\Service\Plugin;

use Zend\Mvc\Service\AbstractPluginManagerFactory;

class ProjectPluginFactory extends AbstractPluginManagerFactory {

	const PLUGIN_MANAGER_CLASS = 'Ageme\Project\Service\Plugin\ProjectPluginManager';

}