<?php
/**
 * Plugin Interface
 *
 * @category Agere
 * @package Agere_Project
 * @author Popov Sergiy <popov@agere.com.ua>
 * @datetime: 09.03.15 21:51
 */

namespace Ageme\Project\Service\Plugin;


interface ProjectPluginInterface {

	/**
	 * Available plugin modes
	 *
	 * @return array
	 */
	public function getModes();

}