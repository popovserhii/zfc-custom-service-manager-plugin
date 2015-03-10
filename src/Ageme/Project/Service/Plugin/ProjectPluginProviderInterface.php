<?php
/**
 * Project Plugin Provider Interface
 *
 * @category Ageme
 * @package Ageme_Project
 * @author Popov Sergiy <popov@agere.com.ua>
 * @datetime: 09.03.15 22:50
 */

namespace Ageme\Project\Service\Plugin;

interface ProjectPluginProviderInterface {

	/**
	 * Expected to return \Zend\ServiceManager\Config object or array to
	 * seed such an object.
	 *
	 * @return array|\Zend\ServiceManager\Config
	 */
	public function getProjectPluginConfig();

}