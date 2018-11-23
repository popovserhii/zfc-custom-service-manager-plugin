<?php
/**
 * Plugin Interface
 *
 * @category Popov
 * @package Popov_Project
 * @author Serhii Popov <popow.sergiy@gmail.com>
 */

namespace Popov\Project\Service\Plugin;

interface ProjectPluginInterface
{
    /**
     * Available plugin modes
     *
     * @return array
     */
    public function getModes();
}