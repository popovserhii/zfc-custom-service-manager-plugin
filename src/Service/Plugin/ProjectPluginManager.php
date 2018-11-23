<?php
/**
 * Project Plugin Manager
 *
 * @category Popov
 * @package Popov_Project
 * @author Serhii Popov <popow.sergiy@gmail.com>
 */

namespace Popov\Project\Service\Plugin;

use Zend\Stdlib\Exception;
use Zend\ServiceManager\AbstractPluginManager;

class ProjectPluginManager extends AbstractPluginManager
{
    /**
     * Default set of extension classes
     * Note: Use config notation for more flexibility
     *
     * @var array
     */
    protected $invokableClasses = [
        //'web-app' => 'Popov\Project\Service\Plugin\WebApp',
    ];

    public function validatePlugin($plugin)
    {
        if ($plugin instanceof ProjectPluginInterface) {
            // we're okay
            return;
        }

        throw new Exception\RuntimeException(sprintf(
            'Plugin of type %s is invalid; must implement %s\ProjectPluginInterface',
            (is_object($plugin) ? get_class($plugin) : gettype($plugin)),
            __NAMESPACE__
        ));
    }
}
